<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutContentController extends Controller
{
    /**
     * Display the About Content.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $aboutContent = AboutContent::first();

        if (!$aboutContent) {
            $aboutContent = new AboutContent();
        }

        return view('backend.about', compact('aboutContent'));
    }

    /**
     * Update the About Section.
     */
    public function updateAbout(Request $request)
    {
        $request->validate([
            'about_text' => 'nullable|string',
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $aboutContent = AboutContent::firstOrNew(); // Use firstOrNew to create a new instance if it doesn't exist

        if ($request->hasFile('about_image')) {
            if (File::exists(public_path('uploads/about/' . $aboutContent->about_image))) {
                File::delete(public_path('uploads/about/' . $aboutContent->about_image));
            }

            $file = $request->file('about_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/about'), $filename);
            $aboutContent->about_image = $filename;
        }

        $aboutContent->about_text = $request->about_text;
        $aboutContent->save();

        return redirect()->route('backend.about.index')->with('success', 'About Ambala IT updated successfully.');
    }

    /**
     * Update the Vision Section.
     */
    public function updateVision(Request $request)
    {
        $request->validate([
            'vision_text' => 'nullable|string',
            'vision_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $aboutContent = AboutContent::firstOrNew();

        if ($request->hasFile('vision_image')) {
            if (File::exists(public_path('uploads/about/' . $aboutContent->vision_image))) {
                File::delete(public_path('uploads/about/' . $aboutContent->vision_image));
            }

            $file = $request->file('vision_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/about'), $filename);
            $aboutContent->vision_image = $filename;
        }

        $aboutContent->vision_text = $request->vision_text;
        $aboutContent->save();

        return redirect()->route('backend.about.index')->with('success', 'Vision updated successfully.');
    }

    /**
     * Update the Mission Section.
     */
    public function updateMission(Request $request)
    {
        $request->validate([
            'mission_text' => 'nullable|string',
            'mission_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $aboutContent = AboutContent::firstOrNew();

        if ($request->hasFile('mission_image')) {
            if (File::exists(public_path('uploads/about/' . $aboutContent->mission_image))) {
                File::delete(public_path('uploads/about/' . $aboutContent->mission_image));
            }

            $file = $request->file('mission_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/about'), $filename);
            $aboutContent->mission_image = $filename;
        }

        $aboutContent->mission_text = $request->mission_text;
        $aboutContent->save();

        return redirect()->route('backend.about.index')->with('success', 'Mission updated successfully.');
    }
}
