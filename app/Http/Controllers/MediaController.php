<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\Setting;

class MediaController extends Controller
{
    public function index()
    {
        $banners = Media::where('type', 'banner')->get();
        $categories = Media::where('type', 'category')->get();
        $gallery = Media::where('type', 'gallery')->get();
        $videos = Media::where('type', 'video')->get();
        $mediaLinks = Media::where('type', 'link')->get();

        return view('backend.gallery', compact('banners', 'categories', 'gallery', 'videos', 'mediaLinks'));
    }

    public function index_frontend()
    {
        $banners = Media::where('type', 'banner')->get();
        $categories = Media::where('type', 'category')->get();
        $galleryImages = Media::where('type', 'gallery')->get();
        $videos = Media::where('type', 'video')->get();
        $mediaLinks = Media::where('type', 'link')->get();
        $settings = Setting::first();
        
        return view('frontend.gallery', compact('banners', 'categories', 'galleryImages', 'videos', 'mediaLinks', 'settings'));
    }
    public function indexImages(Request $request)
    {
        $query = Media::where('type', 'category');

        // Search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $categories = $query->paginate(10); // Paginate categories with 10 items per page
        $galleryQuery = Media::where('type', 'gallery');

        // Search functionality for gallery images
        if ($request->has('search')) {
            $search = $request->input('search');
            $galleryQuery->where('description', 'LIKE', "%{$search}%");
        }

        $gallery = $galleryQuery->paginate(10); // Paginate gallery images with 10 items per page

        return view('backend.media.images', compact('categories', 'gallery'));
    }
    public function indexVideos()
    {
        $videos = Media::where('type', 'video')->get();

        return view('backend.media.videos', compact('videos'));
    }

    public function indexMediaLinks()
    {
        $mediaLinks = Media::where('type', 'link')->get();

        return view('backend.media.links', compact('mediaLinks'));
    }

    public function storeBanner(Request $request)
    {
        $request->validate(['banner_image' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048']);

        Media::create([
            'type' => 'banner',
            'image' => $this->uploadImage($request->file('banner_image'), 'media/gallery/banners')
        ]);

        return redirect()->back()->with('success', 'Banner uploaded successfully.');
    }

    public function storeCategory(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Media::create([
            'type' => 'category',
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'Category added successfully.');
    }

    public function storeGalleryImage(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:media,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        Media::create([
            'type' => 'gallery',
            'category_id' => $request->category_id,
            'image' => $this->uploadImage($request->file('image'), 'media/gallery/images'),
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

    public function storeMediaLink(Request $request)
    {
        $request->validate([
            'media_url' => 'required|url',
            'media_poster' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'title' => 'required|string|max:255',
        ]);

        Media::create([
            'type' => 'link',
            'media_url' => $request->media_url,
            'image' => $this->uploadImage($request->file('media_poster'), 'media/gallery/media_posters'),
            'name' => $request->title
        ]);

        return redirect()->back()->with('success', 'Media link added successfully.');
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $category = Media::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function deleteCategory($id)
    {
        Media::destroy($id);
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }

    public function editGalleryImage($id)
    {
        $image = Media::findOrFail($id);
        return view('backend.gallery', compact('image'));
    }

    public function updateGalleryImage(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:media,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        $galleryImage = Media::findOrFail($id);
        $galleryImage->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $galleryImage->image = $this->uploadImage($request->file('image'), 'media/gallery/images');
        }
        $galleryImage->description = $request->description;
        $galleryImage->save();

        return redirect()->back()->with('success', 'Image updated successfully.');
    }

    public function deleteGalleryImage($id)
    {
        Media::destroy($id);
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    public function updateMediaLink(Request $request, $id)
    {
        $request->validate([
            'media_url' => 'required|url',
            'media_poster' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'title' => 'required|string|max:255',
        ]);

        $mediaLink = Media::findOrFail($id);
        $mediaLink->media_url = $request->media_url;
        if ($request->hasFile('media_poster')) {
            $mediaLink->image = $this->uploadImage($request->file('media_poster'), 'media/gallery/media_posters');
        }
        $mediaLink->name = $request->title;
        $mediaLink->save();

        return redirect()->back()->with('success', 'Media link updated successfully.');
    }

    public function deleteMediaLink($id)
    {
        Media::destroy($id);
        return redirect()->back()->with('success', 'Media link deleted successfully.');
    }

    private function uploadImage($image, $directory)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path($directory), $imageName);
        return $directory . '/' . $imageName;
    }

    private function formatYoutubeUrl($url)
    {
        if (preg_match('/youtu\.be\/([^\?]*)/', $url, $matches) || preg_match('/youtube\.com\/watch\?v=([^\&]*)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }
        return $url;
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'video_url' => 'required|url',
            'video_poster' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'title' => 'required|string|max:255',
        ]);

        Media::create([
            'type' => 'video',
            'media_url' => $this->formatYoutubeUrl($request->video_url), // Use formatted URL
            'image' => $this->uploadImage($request->file('video_poster'), 'media/gallery/video_posters'),
            'name' => $request->title
        ]);

        return redirect()->back()->with('success', 'Video uploaded successfully.');
    }

    public function updateVideo(Request $request, $id)
    {
        $request->validate([
            'video_url' => 'required|url',
            'video_poster' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'title' => 'required|string|max:255',
        ]);

        $video = Media::findOrFail($id);
        $video->media_url = $this->formatYoutubeUrl($request->video_url); // Use formatted URL
        if ($request->hasFile('video_poster')) {
            $video->image = $this->uploadImage($request->file('video_poster'), 'media/gallery/video_posters');
        }
        $video->name = $request->title;
        $video->save();

        return redirect()->back()->with('success', 'Video updated successfully.');
    }

    public function deleteVideo($id)
    {
        Media::destroy($id);
        
        return redirect()->back()->with('success', 'Video deleted successfully.');
    }
    public function manageMediaCategories()
{
    $categories = Media::where('type', 'category')->get();
    return view('backend.media.manage_media_categories', compact('categories'));
}

    
}
