<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::first() ?? new Setting();
        return view('backend.settings', compact('settings'));
    }

    public function update(Request $request)
{
    $request->validate([
        'career_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048', 
        'service_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        'gallery_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048', 
        'product_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        'about_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        'job_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        'apply_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        'contact_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        'article_banner' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048', 
    ]);

    $settings = Setting::first() ?? new Setting();

    if ($request->hasFile('career_banner')) {
        $settings->career_banner = $this->uploadImage($request->file('career_banner'), 'media/banners');
    }

    if ($request->hasFile('service_banner')) {
        $settings->service_banner = $this->uploadImage($request->file('service_banner'), 'media/banners');
    }

    if ($request->hasFile('gallery_banner')) {
        $settings->gallery_banner = $this->uploadImage($request->file('gallery_banner'), 'media/banners');
    }

    if ($request->hasFile('product_banner')) {
        $settings->product_banner = $this->uploadImage($request->file('product_banner'), 'media/banners');
    }

    if ($request->hasFile('about_banner')) {
        $settings->about_banner = $this->uploadImage($request->file('about_banner'), 'media/banners');
    }

    if ($request->hasFile('job_banner')) {
        $settings->job_banner = $this->uploadImage($request->file('job_banner'), 'media/banners');
    }

    if ($request->hasFile('apply_banner')) {
        $settings->apply_banner = $this->uploadImage($request->file('apply_banner'), 'media/banners');
    }

    // Corrected here for contact_banner and article_banner
    if ($request->hasFile('contact_banner')) {
        $settings->contact_banner = $this->uploadImage($request->file('contact_banner'), 'media/banners');
    }

    if ($request->hasFile('article_banner')) {
        $settings->article_banner = $this->uploadImage($request->file('article_banner'), 'media/banners');
    }

    $settings->save();

    return redirect()->route('backend.settings')->with('success', 'Banners updated successfully!');
}


   private function uploadImage($image, $directory)
{
    // Get the original filename without the extension
    $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
    
    // Get the file extension
    $extension = $image->getClientOriginalExtension();

    // Add a unique identifier with a timestamp after the original name
    $imageName = $originalName . '_' . time() . '.' . $extension;

    // Move the file to the specified directory
    $image->move(public_path($directory), $imageName);

    // Return the file path
    return $directory . '/' . $imageName;
}

}
