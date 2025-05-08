<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    public function update(Request $request, Announcement $announcement)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($announcement->image_path) {
                $oldImagePath = public_path('storage/announcements/' . $announcement->image_path);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Store new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('storage/announcements'), $imageName);
            $validated['image_path'] = $imageName;
        }

        $announcement->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Announcement updated successfully'
        ]);
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