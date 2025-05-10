<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
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
            ]);

            $user = Auth::user();

            $appointment = Appointment::create([
                'user_id' => $user->id,
                'appointment_type' => $request->appointment_type,
                'document_type' => $request->document_type,
                'appointment_date' => $request->appointment_date,
                'appointment_time' => $request->appointment_time,
                'status' => 'Pending'
            ]);

            // Send confirmation email
            Mail::to($user->email)->send(new AppointmentMail(
                $appointment->appointment_type,
                $appointment->document_type,
                $appointment->appointment_date,
                $appointment->appointment_time,
                $user->first_name
            ));

            return response()->json([
                'success' => true,
                'message' => 'Appointment created successfully'
            ]);
        } catch (\Exception $e) {
            \Log::error('Appointment creation error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'There was an error creating your appointment. Please try again.'
            ], 500);
        }
    }

    public function showAppointments()
    {
        $appointments = Appointment::orderByRaw("
            CASE 
                WHEN status = 'Pending' THEN 1
                WHEN status = 'Approved' THEN 2
                WHEN status = 'Completed' THEN 3
                WHEN status = 'Declined' THEN 4
                WHEN status = 'Cancelled' THEN 5
            END
        ")->get();
        return view('admin.admin-appointment', compact('appointments'));
    }

    public function updateStatus(Request $request, Appointment $appointment)
    {
        try {
            $request->validate([
                'status' => 'required|in:Pending,Approved,Completed,Cancelled,Declined'
            ]);

            $oldStatus = $appointment->status;
            $newStatus = $request->status;

            $appointment->update([
                'status' => $newStatus
            ]);

            // Only send email if status has changed
            if ($oldStatus !== $newStatus) {
                switch ($newStatus) {
                    case 'Approved':
                        Mail::to($appointment->user->email)->send(new ApprovedAppointmentMail(
                            $appointment->appointment_type,
                            $appointment->document_type,
                            $appointment->appointment_date,
                            $appointment->appointment_time,
                            $appointment->user->first_name
                        ));
                        break;

                    case 'Completed':
                        Mail::to($appointment->user->email)->send(new CompletedAppointmentMail(
                            $appointment->appointment_type,
                            $appointment->document_type,
                            $appointment->appointment_date,
                            $appointment->appointment_time,
                            $appointment->user->first_name
                        ));
                        break;

                    case 'Cancelled':
                        $reason = $request->input('cancellation_reason');
                        Mail::to($appointment->user->email)->send(new CancelledAppointmentMail(
                            $appointment->appointment_type,
                            $appointment->document_type,
                            $appointment->appointment_date,
                            $appointment->appointment_time,
                            $appointment->user->first_name,
                            $reason
                        ));
                        break;

                    case 'Declined':
                        Mail::to($appointment->user->email)->send(new DeclinedAppointmentMail(
                            $appointment->appointment_type,
                            $appointment->document_type,
                            $appointment->appointment_date,
                            $appointment->appointment_time,
                            $appointment->user->first_name
                        ));
                        break;
                }
            }
            
            return redirect()->back()->with('success', 'Appointment status updated successfully');
        } catch (\Exception $e) {
            Log::error('Appointment status update error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update appointment status: ' . $e->getMessage());
        }
    }
}
