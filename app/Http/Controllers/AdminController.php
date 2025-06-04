<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showHomepage()
    {
        $pending_users = User::where('status', 'pending')->get();
        $users = User::where('status', 'approved')->get();
        $announcements = Announcement::all();
        $pending_employees = Employee::where('status', 'pending')->get();
        $isAdmin1 = auth()->guard('employee')->user()->username === 'admin1' || auth()->guard('employee')->user()->username === 'Admin1';

        return view('admin.admin-homepage', compact('pending_users', 'users', 'announcements', 'pending_employees', 'isAdmin1'));
    }
} 