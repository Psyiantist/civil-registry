<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    public function update(Request $request, Announcement $announcement)
    {
        if ($request->has('reset_to_default')) {
            if ($announcement->image_path && $announcement->image_path !== 'default-announcement.png') {
                $oldImagePath = public_path('storage/announcements/' . $announcement->image_path);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $announcement->image_path = 'default-announcement.png';
            $announcement->save();
            return redirect()->back()->with('success', 'Announcement image reset to default successfully!');
        }

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            if ($announcement->image_path && $announcement->image_path !== 'default-announcement.png') {
                $oldImagePath = public_path('storage/announcements/' . $announcement->image_path);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('storage/announcements'), $imageName);
            $announcement->image_path = $imageName;
            $announcement->save();
            return redirect()->back()->with('success', 'Announcement image updated successfully!');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $announcement->update($validated);
        return redirect()->back()->with('success', 'Announcement updated successfully!');
    }

    public function getActiveAnnouncements()
    {
        $announcements = Announcement::where('is_active', true)
            ->orderBy('order')
            ->get();

        return response()->json($announcements);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('storage/announcements'), $imageName);
        $validated['image_path'] = $imageName;
        $validated['is_active'] = true;
        $validated['order'] = Announcement::max('order') + 1;

        Announcement::create($validated);

        return redirect()->back()->with('success', 'Announcement added successfully!');
    }
} 