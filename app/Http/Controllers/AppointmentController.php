<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;

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
            ]);

            $user = Auth::user();

            $appointment = Appointment::create([
                'user_id' => $user->id,
                'appointment_type' => $request->appointment_type,
                'document_type' => $request->document_type,
                'appointment_date' => $request->appointment_date,
                'appointment_time' => $request->appointment_time,
            ]);

            // Send confirmation email
            Mail::to($user->email)->send(new AppointmentMail(
                $appointment->appointment_type,
                $appointment->document_type,
                $appointment->appointment_date,
                $appointment->appointment_time,
                $user->first_name
            ));

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Appointment created successfully'
                ]);
            }

            return redirect()->route('residence-appointment')->with('success', 'Appointment created successfully');
        } catch (\Exception $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'There was an error creating your appointment. Please try again.'
                ], 500);
            }

            return redirect()->route('residence-appointment')->with('error', 'There was an error creating your appointment. Please try again.');
        }
    }
}
