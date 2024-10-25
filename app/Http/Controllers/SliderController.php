<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();  
        $video = Slider::where('is_video', true)->first(); // Fetch the video entry if exists
        return view('backend.home.image-slider', compact('sliders', 'video'));
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'video_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'video_url' => 'required|string|max:255',
            'video_text' => 'nullable|string',
        ]);

        $video = Slider::where('is_video', true)->first();

        // If a video already exists, update it; otherwise, create a new one.
        if (!$video) {
            $video = new Slider();
            $video->is_video = true;
            $video->image = 'default_image.png';
        }

        if ($request->hasFile('video_thumbnail')) {
            if ($video->video_thumbnail && File::exists(public_path('media/sliders/' . $video->video_thumbnail))) {
                File::delete(public_path('media/sliders/' . $video->video_thumbnail));
            }

            $thumbnail = $request->file('video_thumbnail');
            $thumbnailPath = time() . '_thumbnail_' . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('media/sliders'), $thumbnailPath);
            $video->video_thumbnail = $thumbnailPath;
        }

        $video->video_url = $this->formatYoutubeUrl($request->video_url); 
        $video->video_text = $request->video_text;
        $video->save();

        return redirect()->route('backend.sliders.index')->with('success', 'Video updated successfully.');
    }
    private function formatYoutubeUrl($url)
    {
        // Check for different YouTube URL formats and convert to embeddable URL
        if (preg_match('/youtu\.be\/([^\?]*)/', $url, $matches) ||
            preg_match('/youtube\.com\/watch\?v=([^\&]*)/', $url, $matches) ||
            preg_match('/youtube\.com\/embed\/([^\&]*)/', $url, $matches) ||
            preg_match('/youtube\.com\/shorts\/([^\?]*)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }
        return $url;
    }
    
    
    
    
}
