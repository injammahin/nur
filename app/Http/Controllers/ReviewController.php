<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Display all reviews
    public function index()
    {
        $reviews = Review::all();  // Fetch all reviews
        return view('backend.home.review', compact('reviews'));  // Pass reviews to the view
    }

    // Show the form for creating a new review
    public function create()
    {
        return view('backend.home.review');  // Use a separate view for creating a review
    }

    // Store a new review
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048', // Added gif and svg
            'video_url' => 'nullable|url',
        ]);

        $review = new Review();
        $review->author = $request->author;
        $review->role = $request->role;
        $review->text = $request->text;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/review'), $imageName);
            $review->image = $imageName;
        }

        // Save the YouTube URL
        if ($request->video_url) {
            $review->video_url = $request->video_url;
        }

        $review->save();

        return redirect()->route('backend.home.review')->with('success', 'Review added successfully.');
    }

    // Show the form for editing a review
    public function edit(Review $review)
    {
        return view('backend.home.review', compact('review'));  // Create a separate view for editing a review
    }

    // Update an existing review
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048', // Added gif and svg
            'video_url' => 'nullable|url',
        ]);

        $review->author = $request->author;
        $review->role = $request->role;
        $review->text = $request->text;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/review'), $imageName);
            $review->image = $imageName;
        }

        // Save the YouTube URL
        if ($request->video_url) {
            $review->video_url = $request->video_url;
        }

        $review->save();

        return redirect()->route('backend.home.review')->with('success', 'Review updated successfully.');
    }

    // Delete a review
    public function destroy(Review $review)
    {
        // Delete the review
        $review->delete();
        
        return redirect()->route('backend.home.review')->with('success', 'Review deleted successfully.');
    }
}
