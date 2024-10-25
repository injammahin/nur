<?php

namespace App\Http\Controllers;

use App\Models\Blog; // Assuming you have a Blog model
use Illuminate\Http\Request;

class ServiceTagRelatedBlogController extends Controller
{
    public function showAdaptiveSoftwareDevelopment()
    {
        // Fetch blogs that are tagged with 'adaptive software' or 'software'
        $relatedBlogs = Blog::whereHas('tags', function ($query) {
            $query->whereIn('name', ['Adaptive Software', 'Software Development','']);
        })->latest()->take(3)->get();

        // Check if relatedBlogs is being retrieved correctly
        if ($relatedBlogs->isEmpty()) {
            // You may choose to return a message if no blogs are found
            $relatedBlogs = collect(); // Empty collection to avoid errors in the view
        }

        // Pass the related blogs to the view
        return view('frontend.services.adaptive-software-development', compact('relatedBlogs'));
    }
}
