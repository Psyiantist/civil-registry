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
use Illuminate\Support\Str;
use Illuminate\Cache\RateLimiter;

class AuthController extends Controller
{
    // User Login
    public function showLoginForm()
    {
        return view('user-auth.user-login');
    }

    public function loginHandler(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'remember' => 'boolean|nullable',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

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
        return redirect()->route('login')->with('success', 'Logout Successful');
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

        if (strlen($employee->password) < 60) {
            $employee->password = Hash::make($employee->password);
            $employee->save();
        }

        if (!Hash::check($request->password, $employee->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid password']);
        }

        if ($employee->status === 'pending') {
            return redirect()->back()->withErrors(['username' => 'Your account is pending approval. Please wait for admin approval.']);
        }

        if ($employee->status === 'declined') {
            return redirect()->back()->withErrors(['username' => 'Your account has been declined. Please contact the administrator.']);
        }

        $employee->last_login = now()->setTimezone('Asia/Manila');
        $employee->save();

        Auth::guard('employee')->login($employee);
        return redirect()->route('admin.homepage')->with('success', 'Login successful');
    }

    public function updateAdminPassword(Request $request)
    {
        $request->validate([
            'username' => 'required|string|exists:employees,username',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed'
            ]
        ], [
            'username.exists' => 'Username not found.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.confirmed' => 'Password confirmation does not match.'
        ]);

        try {
            $employee = Employee::where('username', $request->username)->first();
            
            if (!$employee) {
                return redirect()->route('admin.login')
                    ->withErrors(['username' => 'Username not found.'])
                    ->withInput($request->only('username'));
            }

            // Check if the new password is the same as the old one
            if (Hash::check($request->password, $employee->password)) {
                return redirect()->route('admin.login')
                    ->withErrors(['password' => 'New password must be different from the current password.'])
                    ->withInput($request->only('username'));
            }

            $employee->password = Hash::make($request->password);
            $employee->save();

            return redirect()->route('admin.login')
                ->with('success', 'Password updated successfully. You can now login with your new password.');
        } catch (\Exception $e) {
            \Log::error('Password update failed: ' . $e->getMessage());
            return redirect()->route('admin.login')
                ->withErrors(['error' => 'Failed to update password. Please try again.'])
                ->withInput($request->only('username'));
        }
    }

    public function adminLogout()
    {
        Auth::guard('employee')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout successful');
    }

    public function adminForgetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:employees,email'
        ], [
            'email.exists' => 'No account found with this email address.'
        ]);

        $employee = Employee::where('email', $request->email)->first();
        
        if (!$employee) {
            return redirect()->back()->withErrors(['email' => 'No account found with this email address.']);
        }

        // Generate a random password
        $newPassword = Str::random(12);
        
        // Update the employee's password
        $employee->password = Hash::make($newPassword);
        $employee->save();

        // Send email with new password
        Mail::to($employee->email)->send(new PasswordResetMail($employee->first_name, $newPassword));

        return redirect()->route('admin.login')
            ->with('success', 'A new password has been sent to your email address. Please check your inbox.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $employee = Employee::where('username', $credentials['username'])->first();

        if ($employee && Hash::check($credentials['password'], $employee->password)) {
            // Store employee info in session
            session(['employee' => $employee]);
            
            return redirect()->route('admin.homepage');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
}
