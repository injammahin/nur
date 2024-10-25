<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\AboutContent;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Technology;
use App\Models\Service;
use App\Models\Media;
use App\Models\Blog;
use App\Models\Module; 
use App\Models\Statistic; 
class HomeController extends Controller
{
    public function imageSlider()
    {
        // Logic to fetch and display Image Slider data
        return view('backend.home.image-slider');
    }

    public function partner()
    {
        // Logic to fetch and display Partner data
        return view('backend.home.partner');
    }

    public function review()
    {
        // Logic to fetch and display Reviews data
        return view('backend.home.review');
    }

    public function languages()
    {
        // Logic to fetch and display Languages data
        return view('backend.home.languages');
    }
    public function index()
    {
        // Fetch data from database
        $sliders = Slider::all();
        $aboutContent = AboutContent::first();
        $services = Service::all();
        $partners = Partner::all();
        $reviews = Review::all();
        $technologies = Technology::all();
        $video = Slider::where('is_video', true)->first();
        // Fetch first 6 gallery images
        $galleryImages = Media::where('type', 'gallery')->take(6)->get(); // Replace 'type' and conditions as needed
        
        // Fetch 3 latest blogs
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

        return view('frontend.welcome', compact('sliders', 'aboutContent', 'services', 'partners', 'reviews', 'technologies', 'galleryImages', 'blogs','video'));
    }
    public function manageModules()
    {
        // Fetch all modules from the database
        $modules = Module::all(); // Ensure you have a 'Module' model
    
        // Return the view with the fetched modules data
        return view('backend.modules', compact('modules'));
    }
    public function about()
    {
        // Fetch statistics and index them by their title
        $statistics = Statistic::all()->keyBy('title');

        // Pass the statistics to the view
        return view('frontend.about', compact('statistics'));
    }

}
