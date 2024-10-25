<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TechnologyController extends Controller
{
    public function index(Request $request)
    {
        // Handle Search Query
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10); // Default items per page is 10
    
        // Fetch technologies with search, pagination, and sorting (latest first)
        $technologies = Technology::when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('created_at', 'desc') // This ensures the latest uploaded technologies show first
            ->paginate($perPage);
    
        return view('backend.home.languages', compact('technologies', 'search', 'perPage'));
    }
    

    // Store a newly created technology
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer'
        ]);

        $technology = new Technology();
        $technology->name = $request->name;
        $technology->order = $request->order ?? 0;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/technologies'), $imageName);
            $technology->image = $imageName;
        }

        $technology->save();

        return redirect()->route('backend.home.languages')->with('success', 'Technology added successfully.');
    }

    // Update an existing technology
    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer'
        ]);

        $technology->name = $request->name;
        $technology->order = $request->order ?? 0;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if (File::exists(public_path('media/technologies/' . $technology->image))) {
                File::delete(public_path('media/technologies/' . $technology->image));
            }

            // Upload new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/technologies'), $imageName);
            $technology->image = $imageName;
        }

        $technology->save();

        return redirect()->route('backend.home.languages')->with('success', 'Technology updated successfully.');
    }

    // Delete a technology
    public function destroy(Technology $technology)
    {
        // Delete the image file
        if (File::exists(public_path('media/technologies/' . $technology->image))) {
            File::delete(public_path('media/technologies/' . $technology->image));
        }

        $technology->delete();

        return redirect()->route('backend.home.languages')->with('success', 'Technology deleted successfully.');
    }
}
