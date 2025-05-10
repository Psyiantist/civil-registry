<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;
use App\Mail\RegistrationMail;
use App\Services\GeneratePassword;

class AuthController extends Controller
{
    // User Login
    public function showLoginForm()
    {
        return view('user-auth.user-login');
    }

    public function loginHandler(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'remember' => 'boolean|nullable',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        // Find the user first to check verification status
        $user = User::where('email', $request->email)->first();
        
        if ($user && ($user->is_verified == 0 || $user->status == 'Rejected')) {
            return redirect()->back()->withErrors(['email' => 'Please verify your email first or your account is rejected.']);
        }

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('residence-homepage')->with('success', 'Login successful');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid email or password',
        ])->withInput($request->only('email', 'remember'));
    }

    public function forgetPassword(Request $request)
    {
        $email = $request->input('email');

        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Email not found']);
        }

        $newPassword = (new GeneratePassword())->generatePassword(16);
        $user->password = Hash::make($newPassword);
        $user->save();

        Mail::to($email)->send(new PasswordResetMail($user->first_name, $newPassword));
        return redirect()->route('password-reset-confirmation')->with('success', 'Password reset successfully. Please check your email for the new password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful');
    }

    // Admin Login 
    public function showEmployeeLoginForm()
    {
        return view('admin-auth.admin-login');
    }

    public function employeeLoginHandler(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $employee = Employee::where('username', $request->username)->first();
        
        if (!$employee) {
            return redirect()->back()->withErrors(['username' => 'Invalid username']);
        }

        if (!Hash::check($request->password, $employee->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid password']);
        }

        Auth::guard('employee')->login($employee);
        return redirect()->route('admin.homepage')->with('success', 'Login successful');
    }

    public function updateAdminPassword(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8'
        ]);

        $employee = Employee::where('username', $request->username)->first();
        if (!$employee) {
            return redirect()->back()->withErrors(['username' => 'Username not found.']);
        }

        $employee->password = Hash::make($request->password);
        $employee->save();

        return redirect()->back()->with('status', 'Password updated successfully.');
    }

    public function adminLogout()
    {
        Auth::guard('employee')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout successful');
    }
}
