<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\AppointmentLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use App\Mail\ApprovedAppointmentMail;
use App\Mail\CompletedAppointmentMail;
use App\Mail\CancelledAppointmentMail;
use App\Mail\DeclinedAppointmentMail;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    public function storeAppointment(Request $request)
    {
        try {
            $request->validate([
                'appointment_type' => 'required',
                'document_type' => 'required',
                'appointment_date' => 'required|date',
                'appointment_time' => 'required',
                'requester_name' => 'required',
                'document_owner_name' => 'required',
                'relationship' => 'required',
            ]);

            $user = Auth::user();

            // Generate reference number (format: CR-YYYYMMDD-XXX)
            $date = now()->format('Ymd');
            $lastAppointment = Appointment::where('reference_number', 'like', "CR-{$date}-%")
                ->orderBy('reference_number', 'desc')
                ->first();
            
            $sequence = 1;
            if ($lastAppointment) {
                $lastSequence = (int) substr($lastAppointment->reference_number, -3);
                $sequence = $lastSequence + 1;
            }
            
            $referenceNumber = sprintf("CR-%s-%03d", $date, $sequence);

            // Store the appointment with the original time
            $appointment = Appointment::create([
                'user_id' => $user->id,
                'reference_number' => $referenceNumber,
                'appointment_type' => $request->appointment_type,
                'document_type' => $request->document_type,
                'appointment_date' => $request->appointment_date,
                'appointment_time' => $request->appointment_time,
                'requester_name' => $request->requester_name,
                'document_owner_name' => $request->document_owner_name,
                'relationship' => $request->relationship,
                'status' => 'Pending'
            ]);

            // Send confirmation email
            Mail::to($user->email)->send(new AppointmentMail($appointment, $user));

            return response()->json([
                'success' => true,
                'message' => 'Appointment created successfully',
                'reference_number' => $appointment->reference_number
            ]);
        } catch (\Exception $e) {
            Log::error('Appointment creation failed: ' . $e->getMessage(), [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to create appointment: ' . $e->getMessage()
            ], 500);
        }
    }

    public function showAppointments()
    {
        $appointments = Appointment::with('user')
            ->orderByRaw("
                CASE 
                    WHEN status = 'Pending' THEN 1
                    WHEN status = 'Approved' THEN 2
                    WHEN status = 'Completed' THEN 3
                    WHEN status = 'Declined' THEN 4
                    WHEN status = 'Cancelled' THEN 5
                END
            ")
            ->orderBy('appointment_date', 'asc')
            ->orderBy('appointment_time', 'asc')
            ->get();

        $approvedAppointments = Appointment::with('user')
            ->where('status', 'Approved')
            ->orderBy('appointment_date', 'asc')
            ->orderBy('appointment_time', 'asc')
            ->get();

        return view('admin.admin-appointment', compact('appointments', 'approvedAppointments'));
    }

    public function filterApproved(Request $request)
    {
        try {
            $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date'
            ]);

            $appointments = Appointment::with('user')
                ->where('status', 'Approved')
                ->whereBetween('appointment_date', [$request->start_date, $request->end_date])
                ->orderBy('appointment_date', 'asc')
                ->orderBy('appointment_time', 'asc')
                ->get();

            return response()->json([
                'success' => true,
                'appointments' => $appointments
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to filter approved appointments: ' . $e->getMessage(), [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to filter appointments: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            Log::info('Attempting to update appointment status', [
                'appointment_id' => $id,
                'new_status' => $request->status
            ]);

            $appointment = Appointment::findOrFail($id);
            $oldStatus = $appointment->status;
            
            Log::info('Found appointment', [
                'appointment' => $appointment->toArray(),
                'old_status' => $oldStatus
            ]);

            $appointment->update([
                'status' => $request->status
            ]);

            Log::info('Appointment updated successfully', [
                'appointment_id' => $appointment->id,
                'old_status' => $oldStatus,
                'new_status' => $request->status
            ]);

            // Get the authenticated employee
            $employee = Auth::guard('employee')->user();
            
            // Log the status update
            AppointmentLog::create([
                'appointment_id' => $appointment->id,
                'employee_id' => $employee->id,
                'action' => 'status_update',
                'old_status' => $oldStatus,
                'new_status' => $request->status
            ]);

            // Send appropriate email based on status
            $user = $appointment->user;
            switch ($request->status) {
                case 'Approved':
                    Mail::to($user->email)->send(new ApprovedAppointmentMail(
                        $appointment->appointment_type,
                        $appointment->document_type,
                        $appointment->appointment_date,
                        $appointment->appointment_time,
                        $user->first_name,
                        $appointment->reference_number
                    ));
                    break;
                case 'Completed':
                    Mail::to($user->email)->send(new CompletedAppointmentMail(
                        $appointment->appointment_type,
                        $appointment->document_type,
                        $appointment->appointment_date,
                        $appointment->appointment_time,
                        $user->first_name,
                        $appointment->reference_number
                    ));
                    break;
                case 'Cancelled':
                case 'Declined':
                    Mail::to($user->email)->send(new CancelledAppointmentMail(
                        $appointment->appointment_type,
                        $appointment->document_type,
                        $appointment->appointment_date,
                        $appointment->appointment_time,
                        $user->first_name,
                        $appointment->reference_number,
                        $appointment
                    ));
                    break;
            }
            
            // Check if the request is AJAX
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Appointment status updated successfully'
                ]);
            }
            
            return redirect()->back()->with('success', 'Appointment status updated successfully');
        } catch (\Exception $e) {
            Log::error('Status update failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'appointment_id' => $id,
                'request_data' => $request->all(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            
            // Check if the request is AJAX
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update appointment status: ' . $e->getMessage()
                ], 500);
            }
            
            return redirect()->back()->with('error', 'Failed to update appointment status: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $appointment = Appointment::findOrFail($id);
            
            // Get the authenticated employee
            $employee = Auth::guard('employee')->user();
            
            // Log the deletion with more details
            AppointmentLog::create([
                'appointment_id' => $appointment->id,
                'employee_id' => $employee->id,
                'action' => 'delete',
                'old_status' => $appointment->status,
                'new_status' => 'Deleted',
                'reason' => 'Appointment deleted by admin',
                'details' => json_encode([
                    'reference_number' => $appointment->reference_number,
                    'appointment_type' => $appointment->appointment_type,
                    'document_type' => $appointment->document_type,
                    'appointment_date' => $appointment->appointment_date,
                    'appointment_time' => $appointment->appointment_time,
                    'deleted_by' => $employee->username
                ])
            ]);

            // Log the deletion in the system log
            Log::info('Appointment deleted', [
                'appointment_id' => $appointment->id,
                'reference_number' => $appointment->reference_number,
                'deleted_by' => $employee->username,
                'deleted_at' => now()
            ]);

        $appointment->delete();
        return redirect()->back()->with('success', 'Appointment deleted successfully');
        } catch (\Exception $e) {
            Log::error('Appointment deletion failed: ' . $e->getMessage(), [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'appointment_id' => $id,
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            return redirect()->back()->with('error', 'Failed to delete appointment: ' . $e->getMessage());
        }
    }

    public function getLogs($id)
    {
        try {
            $logs = AppointmentLog::with(['employee', 'appointment'])
                ->where('appointment_id', $id)
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json([
                'success' => true,
                'logs' => $logs
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to fetch logs: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch logs'
            ], 500);
        }
    }

    public function getAllLogs()
    {
        try {
            $logs = AppointmentLog::with(['employee', 'appointment'])
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json([
                'success' => true,
                'logs' => $logs
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to fetch all logs: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch logs'
            ], 500);
        }
    }

    public function showEmailTester()
    {
        return view('admin.email-tester');
    }

    public function sendTestEmail(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'appointment_type' => 'required',
                'document_type' => 'required',
                'appointment_date' => 'required|date',
                'appointment_time' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
            ]);

            // Create a dummy appointment object
            $appointment = (object)[
                'reference_number' => 'CR-' . date('Ymd') . '-TEST',
                'appointment_type' => $request->appointment_type,
                'document_type' => $request->document_type,
                'appointment_date' => $request->appointment_date,
                'appointment_time' => $request->appointment_time,
            ];

            // Create a dummy user object
            $user = (object)[
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
            ];

            // Send the test email
            Mail::to($request->email)->send(new AppointmentMail($appointment, $user));

            return redirect()->back()->with('success', 'Test email sent successfully!');
        } catch (\Exception $e) {
            Log::error('Test email failed: ' . $e->getMessage(), [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            return redirect()->back()->with('error', 'Failed to send test email: ' . $e->getMessage());
        }
    }

    public function checkExistingAppointment(Request $request)
    {
        try {
            $request->validate([
                'document_type' => 'required',
                'requester_name' => 'required',
                'document_owner_name' => 'required'
            ]);

            $user = Auth::user();

            // Check for existing appointments with the same document type and user
            $existingAppointment = Appointment::where('user_id', $user->id)
                ->where('document_type', $request->document_type)
                ->where('requester_name', $request->requester_name)
                ->where('document_owner_name', $request->document_owner_name)
                ->whereIn('status', ['Pending', 'Approved'])
                ->first();

            if ($existingAppointment) {
                return response()->json([
                    'hasExistingAppointment' => true,
                    'appointment' => $existingAppointment
                ]);
            }

            return response()->json([
                'hasExistingAppointment' => false
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to check existing appointment: ' . $e->getMessage(), [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to check existing appointment: ' . $e->getMessage()
            ], 500);
        }
    }
}
