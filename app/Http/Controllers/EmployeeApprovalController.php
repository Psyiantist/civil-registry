<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeAcceptanceMail;
use App\Mail\EmployeeRejectionMail;

class EmployeeApprovalController extends Controller
{
    public function acceptEmployee($id)
    {
        if (Auth::guard('employee')->user()->username !== 'admin1' && Auth::guard('employee')->user()->username !== 'Admin1') {
            return redirect()->back()->with('employee_error', 'Only admin1 can approve employee accounts.');
        }

        $employee = Employee::findOrFail($id);
        $employee->status = 'approved';
        $employee->save();

        // Send acceptance email
        Mail::to($employee->username)->send(new EmployeeAcceptanceMail($employee->first_name));

        return redirect()->back()->with('employee_success', 'Employee account has been approved successfully.');
    }

    public function rejectEmployee($id, Request $request)
    {
        if (Auth::guard('employee')->user()->username !== 'admin1' && Auth::guard('employee')->user()->username !== 'Admin1') {
            return redirect()->back()->with('employee_error', 'Only admin1 can reject employee accounts.');
        }

        $employee = Employee::findOrFail($id);
        $employee->status = 'declined';
        $employee->save();

        $reason = $request->input('rejection_reason', 'No reason provided');

        // Send rejection email
        Mail::to($employee->username)->send(new EmployeeRejectionMail($employee->first_name, $reason));

        return redirect()->back()->with('employee_success', 'Employee account has been rejected.');
    }

    public function deleteEmployee($id)
    {
        if (Auth::guard('employee')->user()->username !== 'admin1' && Auth::guard('employee')->user()->username !== 'Admin1') {
            return redirect()->back()->with('employee_error', 'Only admin1 can delete employee accounts.');
        }

        $employee = Employee::findOrFail($id);
        
        // Check if employee is active (has logged in within last 14 days)
        if ($employee->last_login && $employee->last_login->diffInDays(now()) <= 14) {
            return redirect()->back()->with('employee_error', 'Cannot delete active employees.');
        }

        $employee->delete();
        return redirect()->back()->with('employee_success', 'Employee account has been deleted successfully.');
    }
}
