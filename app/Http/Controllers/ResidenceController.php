<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class ResidenceController extends Controller
{
    public function showResidenceHomepage()
    {   
        $announcements = Announcement::orderBy('order')->get();
        return view('residence.homepage-residence', compact('announcements'));
    }

    public function showResidenceFaqs()
    {
        return view('residence.faqs');
    }

    public function showResidenceAboutUs()
    {
        return view('residence.about-us');
    }

    public function showResidenceContactUs()
    {
        return view('residence.contact-us');
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
