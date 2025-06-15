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
                'birthday' => [
                    'required',
                    'date',
                    function ($attribute, $value, $fail) {
                        $birthday = new \DateTime($value);
                        $today = new \DateTime();
                        $age = $today->diff($birthday)->y;

                        if ($birthday > $today) {
                            $fail('Birthday cannot be in the future.');
                        }

                        if ($age < 18) {
                            $fail('You must be at least 18 years old to register as an admin.');
                        }

                        if ($age > 100) {
                            $fail('Please enter a valid age (18-100 years).');
                        }
                    },
                ],
                'address' => 'required|string',
                'id_card_image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
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
                    
                    // Validate file type
                    $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                    if (!in_array($file->getMimeType(), $allowedTypes)) {
                        throw new \Exception('Invalid file type. Only JPEG, JPG, and PNG files are allowed.');
                    }
                    
                    // Store directly in uploads directory
                    $file->move(public_path('storage/uploads'), $filename);
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