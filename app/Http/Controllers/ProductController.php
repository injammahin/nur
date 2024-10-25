<?php

// namespace App\Http\Controllers;

// use App\Models\Product;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\File;

// class ProductController extends Controller
// {
//     /**
//      * Display a listing of the products.
//      */
//     public function index(Request $request)
//     {
//         $perPage = $request->input('per_page', 10); // Default 10 items per page
//         $search = $request->input('search');

//         $products = Product::query()
//             ->when($search, function ($query, $search) {
//                 return $query->where('name', 'like', "%{$search}%")
//                     ->orWhere('description', 'like', "%{$search}%");
//             })
//             ->paginate($perPage);

//         return view('backend.products.index', compact('products'));
//     }
//     public function show(Product $product)
//     {
//         $products = Product::all(); // Fetch all products for the sidebar list
    
//         return view('frontend.product', compact('product', 'products'));
//     }
 
//     public function create()
//     {
//         return view('backend.products.create');
//     }


//     /**
//      * Store a newly created product in storage.
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'description' => 'required|string',
//             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'short_description' => 'required|string',
//             'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'hr_payroll_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'accounting_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'inventory_management_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'fams_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'video_url' => 'nullable|string|max:255',
//             'faq_questions' => 'array',
//             'faq_answers' => 'array',
//         ]);
        

//         // Handle image uploads directly to public/media directory
//         // Handle image uploads

//         $imagePath = $this->uploadImage($request, 'image', 'products/product_images');
//         $thumbImagePath = $this->uploadImage($request, 'thumb_image', 'products/product_thumbs');
//         $logoPath = $this->uploadImage($request, 'logo', 'products/product_logos');
//         $hrPayrollImagePath = $this->uploadImage($request, 'hr_payroll_image', 'products/hr_payroll');
//         $accountingImagePath = $this->uploadImage($request, 'accounting_image', 'products/accounting');
//         $inventoryManagementImagePath = $this->uploadImage($request, 'inventory_management_image', 'products/inventory_management');
//         $famsImagePath = $this->uploadImage($request, 'fams_image', 'products/fams');

//         // Create new product
//         $product = Product::create([
//             'name' => $request->name,
//             'description' => $request->description,
//             'short_description' => $request->short_description,
//             'thumb_image' => $thumbImagePath,
//             'image' => $imagePath,
//             'logo' => $logoPath,
//             'hr_payroll_description' => $request->hr_payroll_description,
//             'hr_payroll_image' => $hrPayrollImagePath,
//             'accounting_description' => $request->accounting_description,
//             'accounting_image' => $accountingImagePath,
//             'inventory_management_description' => $request->inventory_management_description,
//             'inventory_management_image' => $inventoryManagementImagePath,
//             'fams_description' => $request->fams_description,
//             'fams_image' => $famsImagePath,
//             'video_url' => $this->formatYoutubeUrl($request->video_url),
//         ]);

//        // Store FAQs
//     if ($request->faq_questions && $request->faq_answers) {
//         for ($i = 0; $i < count($request->faq_questions); $i++) {
//             $product->faqs()->create([
//                 'question' => $request->faq_questions[$i],
//                 'answer' => $request->faq_answers[$i],
//             ]);
//         }
//     }
//         return redirect()->route('backend.product.index')->with('success', 'Product created successfully.');
//     }

//     /**
//      * Show the form for editing the specified product.
//      */
//     public function edit(Product $product)
//     {
//         return view('backend.products.edit', compact('product'));
//     }

//     /**
//      * Update the specified product in storage.
//      */
//     public function update(Request $request, Product $product)
//     {
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'description' => 'required|string',
//             'short_description' => 'required|string',
//             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'hr_payroll_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'accounting_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'inventory_management_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'fams_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'video_url' => 'nullable|string|max:255',
//             'faq_questions' => 'array',
//             'faq_answers' => 'array',
//         ]);
//            // Update FAQs
//            $product->faqs()->delete(); // Delete old FAQs
//              if ($request->faq_questions && $request->faq_answers) {
//                 for ($i = 0; $i < count($request->faq_questions); $i++) {
//                 $product->faqs()->create([
//                 'question' => $request->faq_questions[$i],
//                 'answer' => $request->faq_answers[$i],
//             ]);
//         }
//     }

//         $this->saveProductData($product, $request);

//         return redirect()->route('backend.product.index')->with('success', 'Product updated successfully.');
//     }

//     /**
//      * Save or Update Product Data
//      */
//     private function saveProductData(Product $product, Request $request)
//     {
//         // Handle image uploads
//         $product->image = $this->handleImageUpdate($request, $product, 'image', 'products/product_images');
//         $product->thumb_image = $this->handleImageUpdate($request, $product, 'thumb_image', 'products/product_thumbs');
//         $product->logo = $this->handleImageUpdate($request, $product, 'logo', 'products/product_logos');
//         $product->hr_payroll_image = $this->handleImageUpdate($request, $product, 'hr_payroll_image', 'products/hr_payroll');
//         $product->accounting_image = $this->handleImageUpdate($request, $product, 'accounting_image', 'products/accounting');
//         $product->inventory_management_image = $this->handleImageUpdate($request, $product, 'inventory_management_image', 'products/inventory_management');
//         $product->fams_image = $this->handleImageUpdate($request, $product, 'fams_image', 'products/fams');

//         // Update product details
//         $product->name = $request->name;
//         $product->description = $request->description;
//         $product->short_description = $request->short_description;
//         $product->hr_payroll_description = $request->hr_payroll_description;
//         $product->accounting_description = $request->accounting_description;
//         $product->inventory_management_description = $request->inventory_management_description;
//         $product->fams_description = $request->fams_description;
//         $product->video_url = $this->formatYoutubeUrl($request->video_url);

//         $product->save();
//     }

//     /**
//      * Handle image updates for a specific field.
//      */
//     private function handleImageUpdate(Request $request, Product $product, $fieldName, $folder)
//     {
//         if ($request->hasFile($fieldName)) {
//             // Delete old image if exists
//             $oldImage = 'media/' . $folder . '/' . $product->$fieldName;
//             if ($product->$fieldName && File::exists(public_path($oldImage))) {
//                 File::delete(public_path($oldImage));
//             }

//             // Upload new image
//             $file = $request->file($fieldName);
//             $fileName = time() . '_' . $fieldName . '.' . $file->getClientOriginalExtension();
//             $file->move(public_path('media/' . $folder), $fileName);

//             return $fileName;
//         }

//         return $product->$fieldName;
//     }

//     /**
//      * Format YouTube URL to embed format.
//      */
//     private function formatYoutubeUrl($url)
//     {
//         if (preg_match('/youtu\.be\/([^\?]*)/', $url, $matches) || preg_match('/youtube\.com\/watch\?v=([^\&]*)/', $url, $matches)) {
//             return 'https://www.youtube.com/embed/' . $matches[1];
//         }
//         return $url;
//     }

//     /**
//      * Remove the specified product from storage.
//      */
//     public function destroy(Product $product)
//     {
//         // Delete associated images
//         $this->deleteFileIfExists('media/products/product_images/' . $product->image);
//         $this->deleteFileIfExists('media/products/product_thumbs/' . $product->thumb_image);
//         $this->deleteFileIfExists('media/products/product_logos/' . $product->logo);
//         $this->deleteFileIfExists('media/products/hr_payroll/' . $product->hr_payroll_image);
//         $this->deleteFileIfExists('media/products/accounting/' . $product->accounting_image);
//         $this->deleteFileIfExists('media/products/inventory_management/' . $product->inventory_management_image);
//         $this->deleteFileIfExists('media/products/fams/' . $product->fams_image);

//         $product->delete();

//         return redirect()->route('backend.products.index')->with('success', 'Product deleted successfully.');
//     }

//     /**
//      * Delete file if it exists.
//      */
//     private function deleteFileIfExists($filePath)
//     {
//         if (File::exists(public_path($filePath))) {
//             File::delete(public_path($filePath));
//         }
//     }
//     private function uploadImage(Request $request, $fieldName, $folder)
//     {
//         if ($request->hasFile($fieldName)) {
//             $file = $request->file($fieldName);
//             $fileName = time() . '_' . $fieldName . '.' . $file->getClientOriginalExtension();
//             $file->move(public_path('media/' . $folder), $fileName);
//             return $fileName;
//         }
//         return null;
//     }
// }
