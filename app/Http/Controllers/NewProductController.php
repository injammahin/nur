<?php

namespace App\Http\Controllers;

use App\Models\NewProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\NewProductModule;

class NewProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all new products from the database
        $new_products = NewProduct::all();

        // Pass the products to the view
        return view('backend.new_products.index', compact('new_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.new_products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'brochure' => 'nullable|mimes:pdf|max:10000',
            'video_url' => 'nullable|string|max:255',
             'navmenu_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);
    
        $newProduct = new NewProduct();
        $newProduct->name = $request->name;
        $newProduct->slug = Str::slug($request->name);
        $newProduct->short_description = $request->short_description;
        $newProduct->description = $request->description;
        $newProduct->thumb_image = $this->uploadFile($request, 'thumb_image', 'new_product/thumbs');
        $newProduct->image = $this->uploadFile($request, 'image', 'new_product/images');
        $newProduct->logo = $this->uploadFile($request, 'logo', 'new_product/logos');
        $newProduct->brochure = $this->uploadFile($request, 'brochure', 'new_product/brochures');
        $newProduct->navmenu_image = $this->uploadFile($request, 'navmenu_image', 'new_product/navmenu_images'); // Handle navmenu_image

        $newProduct->video_url = $this->formatYoutubeUrl($request->video_url);  // Format the YouTube URL before saving
        $newProduct->save();
    
        return redirect()->route('backend.new_products.index')->with('success', 'New Product created successfully.');
    }
    
    private function formatYoutubeUrl($url)
    {
        if (preg_match('/youtu\.be\/([^\?]*)/', $url, $matches) || preg_match('/youtube\.com\/watch\?v=([^\&]*)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }
        return $url;
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new_product = NewProduct::findOrFail($id);

        return view('backend.new_products.edit', compact('new_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_product = NewProduct::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'brochure' => 'nullable|file|mimes:pdf|max:10000',
            'navmenu_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate navmenu_image

        ]);

        // Update product details
        $new_product->name = $request->name;
        $new_product->slug = Str::slug($request->name);
        $new_product->short_description = $request->short_description;
        $new_product->description = $request->description;

        // Handle Thumbnail Image Upload
        if ($request->hasFile('thumb_image')) {
            $this->deleteFile('media/new_product/thumbs/', $new_product->thumb_image); // Delete old file
            $new_product->thumb_image = $this->uploadFile($request, 'thumb_image', 'new_product/thumbs');
        }

        // Handle Main Image Upload
        if ($request->hasFile('image')) {
            $this->deleteFile('media/new_product/images/', $new_product->image); // Delete old file
            $new_product->image = $this->uploadFile($request, 'image', 'new_product/images');
        }

        // Handle Logo Upload
        if ($request->hasFile('logo')) {
            $this->deleteFile('media/new_product/logos/', $new_product->logo); // Delete old file
            $new_product->logo = $this->uploadFile($request, 'logo', 'new_product/logos');
        }

        // Handle Brochure Upload
        if ($request->hasFile('brochure')) {
            $this->deleteFile('media/new_product/brochures/', $new_product->brochure); // Delete old file
            $new_product->brochure = $this->uploadFile($request, 'brochure', 'new_product/brochures');
        }
        // Handle navmenu image upload
    if ($request->hasFile('navmenu_image')) {
        $this->deleteFile('media/new_product/navmenu_images/', $new_product->navmenu_image); // Delete old file
        $new_product->navmenu_image = $this->uploadFile($request, 'navmenu_image', 'new_product/navmenu_images');
    }

        $new_product->save(); // Save changes

        return redirect()->route('backend.new_products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new_product = NewProduct::findOrFail($id);

        // Delete associated files
        $this->deleteFile('media/new_product/thumbs/', $new_product->thumb_image);
        $this->deleteFile('media/new_product/images/', $new_product->image);
        $this->deleteFile('media/new_product/logos/', $new_product->logo);
        $this->deleteFile('media/new_product/brochures/', $new_product->brochure);

        $new_product->delete();

        return redirect()->route('backend.new_products.index')->with('success', 'Product deleted successfully.');
    }

    /**
     * Helper function to handle file uploads.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $fieldName
     * @param  string  $folder
     * @return string|null
     */
    private function uploadFile(Request $request, $fieldName, $folder)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('media/' . $folder), $fileName);
            return $fileName;
        }
        return null;
    }

    /**
     * Helper function to delete old files.
     *
     * @param  string  $folder
     * @param  string  $fileName
     * @return void
     */
    private function deleteFile($folder, $fileName)
    {
        if ($fileName && File::exists(public_path($folder . $fileName))) {
            File::delete(public_path($folder . $fileName));
        }
    }
    // Example Controller Method
    public function show($slug)
    {
        // Fetch the single product by slug
        $new_product = NewProduct::where('slug', $slug)->firstOrFail();

        // Fetch all products (for listing or sidebar purposes)
        $new_products = NewProduct::all();

        // Fetch modules associated with the product
        $modules = NewProductModule::where('new_product_id', $new_product->id)->get();

        // Return the view with the single product and its modules
        return view('frontend.products.show', compact('new_product', 'new_products', 'modules'));
    }

}
