<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Contact;
use App\Models\Faq;
class ResidenceController extends Controller
{
    public function showResidenceHomepage()
    {   
        $announcements = Announcement::orderBy('order')->get();
        return view('residence.homepage-residence', compact('announcements'));
    }

    public function showResidenceFaqs()
    {
        $faqs = Faq::all();
        return view('residence.faqs', compact('faqs'));
    }

    public function showResidenceAboutUs()
    {
        return view('residence.about-us');
    }

    public function showResidenceContactUs()
    {
        $contact = Contact::first();
        return view('residence.contact-us', compact('contact'));
    }
    
    public function showResidenceAppointment()
    {
        return view('residence.appointment');
    }

    public function showResidenceRequirements()
    {
        return view('residence.requirements');
    }

    public function showProfile()
    {
        return view('residence.profile');
    }


}
