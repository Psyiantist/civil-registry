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
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees,email',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date',
            'address' => 'required|string',
            'id_card_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $filename = null;
            if($request->hasFile('id_card_image')){
                $file = $request->file('id_card_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                
                // Ensure upload directory exists
                $uploadPath = public_path('storage/uploads');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                
                $file->move($uploadPath, $filename);
            }

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

            // Send registration confirmation email
            Mail::to($request->email)->send(new AdminRegistrationMail($request->first_name));

            return redirect()->route('admin.login')->with('success', 'Registration successful! Please wait for admin approval.');
        } catch (\Exception $e) {
            // If there's an error, delete the uploaded file if it exists
            if (isset($filename) && file_exists(public_path('storage/uploads/' . $filename))) {
                unlink(public_path('storage/uploads/' . $filename));
            }
            
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
} 