<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('backend.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('backend.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'video_url' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $thumbnailPath = '';
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = time() . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('media/thumbnails'), $thumbnailPath);
        }

        Video::create([
            'title' => $request->title,
            'video_url' => $request->video_url,
            'description' => $request->description,
            'thumbnail' => $thumbnailPath,
        ]);

        return redirect()->route('backend.videos.index')->with('success', 'Video created successfully.');
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('backend.videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'video_url' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail
            if (File::exists(public_path('media/thumbnails/' . $video->thumbnail))) {
                File::delete(public_path('media/thumbnails/' . $video->thumbnail));
            }
            // Upload new thumbnail
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = time() . '_' . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('media/thumbnails'), $thumbnailPath);
            $video->thumbnail = $thumbnailPath;
        }

        $video->title = $request->title;
        $video->video_url = $request->video_url;
        $video->description = $request->description;
        $video->save();

        return redirect()->route('backend.videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);

        if (File::exists(public_path('media/thumbnails/' . $video->thumbnail))) {
            File::delete(public_path('media/thumbnails/' . $video->thumbnail));
        }

        $video->delete();

        return redirect()->route('backend.videos.index')->with('success', 'Video deleted successfully.');
    }
}
