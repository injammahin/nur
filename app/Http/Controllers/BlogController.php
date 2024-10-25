<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        
        // Handle Search Query
        $search = $request->input('search');
        $perPage = $request->input('per_page', 20); // Default items per page is 10

        // Fetch blogs with search functionality
        $blogs = Blog::with('category')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->paginate($perPage);
            $tags = Tag::all();
        return view('backend.blogs.index', compact('blogs', 'categories', 'search', 'perPage','tags'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();  // Fetch all tags
        return view('backend.blogs.create', compact('categories', 'tags'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:655|unique:blogs,title',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
        ]);
    
        $imageName = null;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $uniqueIdentifier = time(); // You can use uniqid() or Str::random(6) for better uniqueness
    
            // Construct new filename
            $imageName = $originalName . '_' . $uniqueIdentifier . '.' . $extension;
    
            // Move the file to the 'media/blogs' directory
            $image->move(public_path('media/blogs'), $imageName);
        }
    
        $blog = Blog::create([
            'title' => $request->title,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'slug' => Str::slug($request->title),
        ]);
    
        // Attach selected tags to the blog
        $blog->tags()->attach($request->tags);
    
        return redirect()->route('backend.blogs.index')->with('success', 'Blog added successfully.');
    }
    
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:655|unique:blogs,title,' . $blog->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && file_exists(public_path('media/blogs/' . $blog->image))) {
                unlink(public_path('media/blogs/' . $blog->image));
            }
    
            $image = $request->file('image');
            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $uniqueIdentifier = time(); // Generate unique identifier
    
            // Construct new filename
            $imageName = $originalName . '_' . $uniqueIdentifier . '.' . $extension;
    
            // Move the file to the 'media/blogs' directory
            $image->move(public_path('media/blogs'), $imageName);
            $blog->image = $imageName;
        }
    
        // Update the blog
        $blog->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
        ]);
    
        // Update tags
        $tags = $request->input('tags', []); // Ensure 'tags' input is an array
        $blog->tags()->sync($tags);
    
        return redirect()->route('backend.blogs.index')->with('success', 'Blog updated successfully.');
    }
    
    
    public function edit(Blog $blog)
{
    $categories = Category::all();
    $tags = Tag::all(); // Load all tags

    return view('backend.blogs.edit', compact('blog', 'categories', 'tags'));
}



    public function show(Blog $blog)
    {
        return view('backend.blogs.show', compact('blog'));
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image && file_exists(public_path('media/blogs/' . $blog->image))) {
            unlink(public_path('media/blogs/' . $blog->image));
        }
        $blog->delete();

        return redirect()->route('backend.blogs.index')->with('success', 'Blog deleted successfully.');
    }

    public function storeCategory(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Category::create(['name' => $request->name]);
    
        return redirect()->route('backend.manage-categories')->with('success', 'Category added successfully.');
    }
    
    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return redirect()->route('backend.manage-categories')->with('success', 'Category deleted successfully.');
    }
    
    public function storeTag(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Tag::create(['name' => $request->name]);
    
        return redirect()->route('backend.manage-tags')->with('success', 'Tag added successfully.');
    }
    
    public function destroyTag($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
    
        return redirect()->route('backend.manage-tags')->with('success', 'Tag deleted successfully.');
    }
    
public function manageCategories()
{
    $categories = Category::all();
    $tags = Tag::all();

    return view('backend.blogs.manage-categories-tags', compact('categories', 'tags'));
}



}
