<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function showStep1()
    {
        return view('user-auth.user-registration1');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'receive_notifications' => 'nullable|boolean',
        ]);

        session([
            'register.first_name' => $request->input('first_name'),
            'register.last_name' => $request->input('last_name'),
            'register.email' => $request->input('email'),
            'register.password' => Hash::make($request->input('password')),
            'register.receive_notifications' => $request->input('receive_notifications'),
        ]);

        return redirect()->route('register.step2');
    }

    public function showStep2()
    {
        return view('user-auth.user-registration2');
    }

    public function postStep2(Request $request)
    {
        try {
            $request->validate([
                'id_type' => 'required|string|max:255',
                'id_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'years_residency' => 'required|integer|min:0',
                'current_address' => 'required|string|max:255',
                'permanent_address' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
            ]);

            $filename = null;
            if($request->hasFile('id_image')){
                $file = $request->file('id_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('uploads', $filename, 'public');
                $filename = Storage::disk('public')->url('uploads/' . $filename);
            }

            $step1Data = [
                'first_name' => session('register.first_name'),
                'last_name' => session('register.last_name'),
                'email' => session('register.email'),
                'password' => session('register.password'),
                'receive_notifications' => session('register.receive_notifications'),
            ];

            $registrationData = array_merge($step1Data, [
                'id_type' => $request->input('id_type'),
                'id_image' => $filename,
                'years_residency' => $request->input('years_residency'),
                'current_address' => $request->input('current_address'),
                'permanent_address' => $request->input('permanent_address'),
                'date_of_birth' => $request->input('date_of_birth'),
                'is_verified' => 0,
                'status' => 'Pending',
                'last_login' => now(),
            ]);

            $user = User::create($registrationData);

            session()->forget('register');

            // Send registration confirmation email
            Mail::to($registrationData['email'])->send(new \App\Mail\RegistrationMail($registrationData['first_name']));

            return redirect()->route('login')->with('success', 'Registration successful! Please wait for admin approval.');

        } catch (\Exception $e) {
            Log::error('Registration error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred during registration. Please try again.']);
        }
    }
}
