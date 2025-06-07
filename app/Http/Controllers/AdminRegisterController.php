<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminRegistrationMail;
use Illuminate\Support\Facades\Storage;

class AdminRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.admin-register');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:employees,email',
                'password' => 'required|string|min:8',
                'password_confirmation' => 'required|same:password',
                'birthday' => 'required|date',
                'address' => 'required|string',
                'id_card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'password_confirmation.same' => 'The password confirmation does not match.',
                'password.min' => 'The password must be at least 8 characters.',
            ]);

            $filename = null;
            if($request->hasFile('id_card_image')){
                try {
                    $file = $request->file('id_card_image');
                    $randomNumber = mt_rand(100000, 999999);
                    $filename = $randomNumber . '_' . $file->getClientOriginalName();
                    
                    // Store in public disk
                    $file->storeAs('uploads', $filename, 'public');
                    // Store only the filename, not the full URL
                    \Log::info('File uploaded successfully: ' . $filename);
                } catch (\Exception $e) {
                    \Log::error('File upload failed: ' . $e->getMessage());
                    throw $e;
                }
            }

            try {
                $employee = Employee::create([
                    'email' => $request->email,
                    'username' => $request->email,
                    'password' => Hash::make($request->password),
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'birthday' => $request->birthday,
                    'address' => $request->address,
                    'id_card_image' => $filename,
                    'status' => 'pending'
                ]);
                \Log::info('Employee created successfully: ' . $employee->id);
            } catch (\Exception $e) {
                \Log::error('Employee creation failed: ' . $e->getMessage());
                throw $e;
            }

            try {
                // Send registration confirmation email
                Mail::to($request->email)->send(new AdminRegistrationMail($request->first_name));
                \Log::info('Registration email sent to: ' . $request->email);
            } catch (\Exception $e) {
                \Log::error('Email sending failed: ' . $e->getMessage());
                // Don't throw here, as the user is already created
            }

            return redirect()->route('admin.login')->with('success', 'Registration successful! Please wait for admin approval.');
        } catch (\Exception $e) {
            \Log::error('Admin registration failed: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            
            // If there's an error, delete the uploaded file if it exists
            if (isset($filename)) {
                try {
                    Storage::delete('public/uploads/' . $filename);
                } catch (\Exception $e) {
                    \Log::error('Failed to delete uploaded file: ' . $e->getMessage());
                }
            }
            
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Registration failed: ' . $e->getMessage()]);
        }
    }
} 