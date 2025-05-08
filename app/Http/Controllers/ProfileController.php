<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getUser()
    {
        $user = Auth::user();
        $fullName = $user->first_name . ' ' . $user->last_name;
        return view('residence.profile', compact('user', 'fullName'));
    }

    public function updateProfile(Request $request) {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:255',
            'current_address' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Split the full name into first and last name
        $nameParts = explode(' ', $request->input('name'));
        $firstName = $nameParts[0];
        $lastName = count($nameParts) > 1 ? implode(' ', array_slice($nameParts, 1)) : '';

        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->current_address = $request->input('current_address');

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/profiles'), $imageName);
            $user->profile_image = $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function removeProfileImage(Request $request) {
        $user = Auth::user();
        
        if ($user->profile_image && $user->profile_image !== 'default-profile.jpg') {
            $oldImagePath = public_path('storage/profiles/' . $user->profile_image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        
        $user->profile_image = 'default-profile.jpg';
        $user->save();
        
        return redirect()->back()->with('success', 'Profile image removed successfully');
    }
}