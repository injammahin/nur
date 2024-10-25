<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainSetting;

class MainSettingsController extends Controller
{
    public function index()
    {
        // Fetch all settings as a key-value pair
        $main_settings = MainSetting::all()->pluck('value', 'key')->toArray();

        return view('backend.main_settings', compact('main_settings'));
    }

    public function update(Request $request)
    {
        // Validate inputs
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
        ]);

        // Handle Logo Upload
        if ($request->hasFile('site_logo')) {
            $logoPath = $this->uploadImage($request->file('site_logo'), 'media/logos');
            MainSetting::set('site_logo', $logoPath); // Save logo path in settings
        }

        // Update other settings
        foreach ($request->except(['_token', 'site_logo']) as $key => $value) {
            MainSetting::set($key, $value);
        }

        return redirect()->route('backend.main_settings.index')->with('success', 'Settings updated successfully!');
    }

    private function uploadImage($image, $directory)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path($directory), $imageName);
        return $directory . '/' . $imageName;
    }
}
