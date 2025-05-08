<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class EmployeeController extends Controller
{
    public function showAdminHomepage()
    {
        $announcements = Announcement::orderBy('order')->get();
        return view('admin.admin-homepage', compact('announcements'));
    }

    public function showAdminAppointment()
    {
        return view('admin.admin-appointment');
    }

    public function showAdminRequirements()
    {
        return view('admin.admin-requirements');
    }

    public function showAdminFaqs()
    {
        return view('admin.admin-faqs');
    }

    public function showAdminAbout()
    {
        return view('admin.admin-about');
    }

    public function showAdminContact()
    {
        return view('admin.admin-contact');
    }
    
    
}
