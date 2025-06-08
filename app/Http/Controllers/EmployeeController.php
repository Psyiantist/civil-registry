<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\User;
use App\Mail\UserAcceptanceMail;
use App\Mail\UserRejectionMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function showAdminHomepage()
    {
        $announcements = Announcement::orderBy('order')->get();
        $isAdmin1 = auth()->guard('employee')->user()->username === 'admin1' || auth()->guard('employee')->user()->username === 'Admin1';
        return view('admin.admin-homepage', compact('announcements', 'isAdmin1'));
    }

    public function getPendingUsers()
    {
        $pending_users = User::where('status', 'Pending')
            ->select('id', 'first_name', 'last_name', 'email', 'id_type', 'id_image', 'current_address', 'date_of_birth', 'status')
            ->get();
            
        return response()->json([
            'success' => true,
            'data' => $pending_users
        ]);
    }

    public function getUserActivity()
    {
        $users = User::where('is_verified', '1')
            ->select('id', 'first_name', 'last_name', 'email', 'last_login', 'status')
            ->get()
            ->map(function ($user) {
                $user->is_active = $user->last_login && $user->last_login->diffInDays(now()) <= 14;
                return $user;
            });
            
        return response()->json([
            'success' => true,
            'data' => $users
        ]);
    }

    public function getEmployeeActivity(Request $request)
    {
        try {
            \Log::info('Starting getEmployeeActivity');
            
            // First check if we can query the Employee model
            $employeeCount = Employee::count();
            \Log::info('Total employees in database: ' . $employeeCount);

            $query = Employee::where('status', 'approved')
                ->whereNotIn('username', ['admin1', 'Admin1'])
                ->select('id', 'first_name', 'last_name', 'email', 'last_login', 'status');

            // Apply status filter if provided
            $statusFilter = $request->input('status');
            if ($statusFilter && $statusFilter !== 'all') {
                $query->where(function($q) use ($statusFilter) {
                    if ($statusFilter === 'active') {
                        $q->whereNotNull('last_login')
                          ->whereRaw('last_login >= ?', [now()->subDays(14)]);
                    } else if ($statusFilter === 'inactive') {
                        $q->where(function($q) {
                            $q->whereNull('last_login')
                              ->orWhereRaw('last_login < ?', [now()->subDays(14)]);
                        });
                    }
                });
            }

            $employees = $query->get();
            
            \Log::info('Found ' . $employees->count() . ' approved employees (excluding admin)');

            $employees = $employees->map(function ($employee) {
                try {
                    $employee->is_active = $employee->last_login && $employee->last_login->diffInDays(now()) <= 14;
                    return $employee;
                } catch (\Exception $e) {
                    \Log::error('Error processing employee ' . $employee->id . ': ' . $e->getMessage());
                    return $employee;
                }
            });
                
            return response()->json([
                'success' => true,
                'data' => $employees
            ]);
        } catch (\Exception $e) {
            \Log::error('Error in getEmployeeActivity: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            return response()->json([
                'success' => false,
                'message' => 'Error loading employee activity: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function showAdminAppointment()
    {
        return view('admin.admin-appointment');
    }

    public function showAdminRequirements()
    {
        return view('admin.admin-requirements');
    }

    public function showAdminAbout()
    {
        return view('admin.admin-about');
    }

    public function showAdminContact()
    {
        return view('admin.admin-contact');
    }

    public function acceptUser(User $user)
    {
        if (auth()->guard('employee')->user()->username !== 'admin1' && auth()->guard('employee')->user()->username !== 'Admin1') {
            return redirect()->back()->with('error', 'Only admin1 can approve users');
        }

        $user->update(['is_verified' => 1, 'status' => 'Approved']);
        Mail::to($user->email)->send(new UserAcceptanceMail($user->first_name));
        return redirect()->back()->with('success', 'User accepted successfully');
    }

    public function rejectUser(User $user, Request $request)
    {
        if (auth()->guard('employee')->user()->username !== 'admin1' && auth()->guard('employee')->user()->username !== 'Admin1') {
            return redirect()->back()->with('error', 'Only admin1 can reject users');
        }

        $reason = $request->input('rejection_reason', 'No reason provided');
        $user->update(['is_verified' => 0, 'status' => 'Rejected']);
        Mail::to($user->email)->send(new UserRejectionMail($user->first_name, $reason));
        return redirect()->back()->with('success', 'User rejected successfully');
    }

    public function deleteUser(User $user)
    {
        // Check if user is admin1
        $isAdmin1 = auth()->guard('employee')->user()->username === 'admin1' || auth()->guard('employee')->user()->username === 'Admin1';
        
        // If not admin1, check if user is active
        if (!$isAdmin1) {
            if ($user->last_login && $user->last_login->diffInDays(now()) <= 14) {
                return redirect()->back()->with('error', 'Cannot delete active users');
            }
        }
        
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
