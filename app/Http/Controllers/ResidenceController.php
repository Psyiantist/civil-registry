<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Requirement;

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
        $requirements = Requirement::all();
        return view('residence.appointment', compact('requirements'));
    }

    public function showResidenceRequirements()
    {
        $requirements = Requirement::all();
        return view('residence.requirements', compact('requirements'));
    }

    public function showProfile()
    {
        return view('residence.profile');
    }


}
