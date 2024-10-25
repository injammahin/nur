<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    public function index()
    {
        // Fetch all partners, ordered by creation date (latest first)
        $partners = Partner::latest()->get();
        return view('frontend.welcome', compact('partners'));
    }
    

    public function create(Request $request)
    {
        // Handle Search Query
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10); // Default items per page is 10
    
        // Fetch partners with search and pagination, ordered by creation date (latest first)
        $partners = Partner::when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->latest() // This orders by created_at in descending order
            ->paginate($perPage);
    
        return view('backend.home.partner', compact('partners', 'search', 'perPage'));
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,webp,gif,svg|max:2048', // Allow GIF and SVG
        ]);
    
        $partner = new Partner();
        $partner->name = $request->name;
    
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/partners'), $imageName);
            $partner->image = $imageName;
        }
    
        $partner->save();
    
        return redirect()->route('backend.home.partner')->with('success', 'Partner added successfully.');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|mimes:jpeg,png,jpg,webp,gif,svg|max:2048', // Allow GIF and SVG
        ]);
    
        $partner = Partner::findOrFail($id);
        $partner->name = $request->name;
    
        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if (File::exists(public_path('media/partners/' . $partner->image))) {
                File::delete(public_path('media/partners/' . $partner->image));
            }
    
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media/partners'), $imageName);
            $partner->image = $imageName;
        }
    
        $partner->save();
    
        return redirect()->route('backend.home.partner')->with('success', 'Partner updated successfully.');
    }
    // Delete a partner
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        // Delete the image file from storage
        if (File::exists(public_path('media/partners/' . $partner->image))) {
            File::delete(public_path('media/partners/' . $partner->image));
        }

        // Delete the partner record from the database
        $partner->delete();

        return redirect()->route('backend.home.partner')->with('success', 'Partner deleted successfully.');
    }
   
}
