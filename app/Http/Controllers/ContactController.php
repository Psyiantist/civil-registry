<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Email\ContactEmailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\FeedbackMail;
use App\Models\Feedback;
use App\Models\Contact;
use App\Mail\FeedbackReply;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $fixedEmail = 'carlmattfernandez@gmail.com';

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255',
        ]);

        try {
            Mail::to($fixedEmail)->send(new ContactMail($request->name, $request->email, $request->message));
            session()->flash('success', 'Your message has been sent successfully!');
            return redirect()->route('contact');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to send message. Please try again.');
            return redirect()->route('contact');
        }
    }

    public function sendFeedback(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);

            // Store feedback in database
            $feedback = Feedback::create([
                'name' => $request->name,
                'email' => $request->email,
                'feedback' => $request->message,
            ]);

            // Send email notification
            Mail::to('carlmattfernandez@gmail.com')->send(new FeedbackMail(
                $request->name,
                $request->email,
                $request->message
            ));

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for your feedback. We will get back to you soon.'
                ]);
            }

            return redirect()->back()->with('success', 'Thank you for your feedback. We will get back to you soon.');
        } catch (\Exception $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'There was an error sending your message. Please try again.'
                ], 500);
            }

            return redirect()->back()->with('error', 'There was an error sending your message. Please try again.');
        }
    }

    public function showAdminContact()
    {
        $contact = Contact::first();
        $feedbacks = Feedback::all();
        return view('admin.admin-contact', compact('contact', 'feedbacks'));
    }

    public function updateContact(Request $request)
    {
        $field = $request->input('field');
        $allowedFields = ['address', 'phone', 'email', 'office_hours'];

        if (!in_array($field, $allowedFields)) {
            return back()->with('error', 'Invalid field.');
        }

        $rules = [
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'office_hours' => 'required|string|max:255',
        ];

        $request->validate([
            $field => $rules[$field]
        ]);

        $contact = Contact::first();
        if (!$contact) {
            return back()->with('error', 'Contact record does not exist. Please create it in the database first.');
        }
        $contact->$field = $request->input($field);
        $contact->save();

        return back()->with('success', ucfirst($field) . ' updated successfully.');
    }

    public function getContact()
    {
        $contact = Contact::first();
        return response()->json($contact);
    }

    public function showUserContact()
    {
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }

    public function deleteFeedback($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->back()->with('success', 'Feedback deleted successfully.');
    }

    public function replyToFeedback(Request $request)
    {
        try {
            $request->validate([
                'recipient_email' => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
                'recipient_name' => 'required|string|max:255',
            ]);

            // Send email using the new template
            Mail::to($request->recipient_email)->send(new FeedbackReply(
                $request->subject,
                $request->message,
                $request->recipient_name
            ));

            return response()->json([
                'success' => true,
                'message' => 'Reply sent successfully'
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to send feedback reply: ' . $e->getMessage(), [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to send reply: ' . $e->getMessage()
            ], 500);
        }
    }
}
