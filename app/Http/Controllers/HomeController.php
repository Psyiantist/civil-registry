<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class HomeController extends Controller
{
    public function showHomePage()
    {
        $announcements = Announcement::orderBy('order')->get();
        return view('homepage', compact('announcements'));
    }
}
