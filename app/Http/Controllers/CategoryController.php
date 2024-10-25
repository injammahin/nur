<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.blogs.manage-categories-tags', compact('categories'));
    }
    
    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Category::create(['name' => $request->name]);

        return redirect()->route('backend.categories.index')->with('success', 'Category added successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('backend.categories.index')->with('success', 'Category deleted successfully.');
    }
}
