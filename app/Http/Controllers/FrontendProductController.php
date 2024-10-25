<?php
namespace App\Http\Controllers;

use App\Models\NewProduct;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\NewProductModule;

class FrontendProductController extends Controller
{
    public function index()
    {
        // Fetch products and settings from the database
        $new_products = NewProduct::all(); // Changed from $new_product to $new_products
        $settings = Setting::first(); // Adjust this based on your actual data fetching logic

        // Return the view with the fetched data
        return view('frontend.products.index', compact('new_products', 'settings')); // Correct variable passed
    }

    // Show product detail page
    public function show($slug)
    {
        $new_product = NewProduct::where('slug', $slug)->firstOrFail();
        $new_products = NewProduct::all();
        $modules = NewProductModule::where('new_product_id', $new_product->id)->get();
        return view('frontend.products.show', compact('new_products', 'new_product','modules'));
    }
}

