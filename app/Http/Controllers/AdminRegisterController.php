<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminRegistrationMail;

class AdminRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.admin-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees,username',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date',
            'address' => 'required|string',
            'employee_id' => 'required|string|unique:employees',
        ]);

        $employee = Employee::create([
            'username' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'birthday' => $request->birthday,
            'address' => $request->address,
            'employee_id' => $request->employee_id,
        ]);

        // Send welcome email
        Mail::to($request->email)->send(new AdminRegistrationMail($request->first_name));

        return redirect()->route('admin.login')->with('success', 'Registration successful! Please login.');
    }
} 