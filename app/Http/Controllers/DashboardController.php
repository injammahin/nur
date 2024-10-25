<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\NewProduct;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Media;
use App\Models\Technology;
use App\Models\Job;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch counts and statistics
        $totalUsers = User::count();
        $totalBlogs = Blog::count();
        $totalProducts = NewProduct::count(); 
        $totalContacts = Contact::count(); // Total contact us submissions
        $totalReviews = Review::count(); // Total reviews
        $totalImages = Media::where('type', 'image')->count(); // Assuming media table tracks different types
        $totalMedia = Media::count(); // Total media uploads (images + videos + other media)
        $totalVideos = Media::where('type', 'video')->count(); // Total videos
        $totalLanguages = Technology::count(); // Total languages uploaded
        $totalJobPosts = Job::count(); // Total job posts uploaded

        // Fetch latest users (Example)
        $latestUsers = User::orderBy('created_at', 'desc')->take(5)->get();

        // Example traffic and category data for charts
        $trafficChartLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'];
        $trafficChartData = [120, 150, 180, 220, 170, 200, 230, 250]; // Example visitors data
        $categoryChartLabels = ['Business', 'Technology', 'Health', 'Finance'];
        $categoryChartData = [30, 20, 25, 25]; // Example category distribution
dd($totalUsers);
        return view('backend.dashboard', compact(
            'totalUsers', 
            'totalBlogs', 
            'totalProducts',   // Ensure this is included here
            'totalContacts', 
            'totalReviews', 
            'totalImages', 
            'totalMedia', 
            'totalVideos', 
            'totalLanguages', 
            'totalJobPosts', 
            'productsSold', 
            'latestUsers', 
            'trafficChartLabels', 
            'trafficChartData', 
            'categoryChartLabels', 
            'categoryChartData'
        ));
        
    }
}
