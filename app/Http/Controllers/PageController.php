<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Review;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Technology;
use App\Models\AboutContent;
use App\Models\NewProduct;
use App\Models\Module;
use App\Charts\VisitorsChart;
use App\Models\Visitor;
use App\Models\User;
use App\Models\Contact;
use App\Models\PageView;
use App\Models\Media;
use App\Models\Job;
use App\Models\Statistic;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
class PageController extends Controller
{
    
    // public function dashboard()
    // {
    //     return view('backend.dashboard');
    // }

   
    public function tables()
    {
        return view('backend.tables');
    }

    public function job()
    {
        return view('backend.job');
    }

    public function jobs()
    {
        return view('frontend.job');
    }

    public function product()
    {
        $newProducts = NewProduct::all();

       
        return view('backend.product', compact('newProducts'));
    }

    public function review()
    {
        $reviews = Review::all();  
        return view('backend.home.review', compact('reviews')); 
    }

    public function charts()
    {
        return view('backend.charts');
    }

    public function contacts()
    {
        return view('backend.contacts');
    }

   
    public function show($page)
    {
        $viewPath = 'backend.' . $page;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404); 
    }

    public function about()
    {
        $aboutContent = AboutContent::first(); 

        $settings = Setting::first(); 

        $reviews = Review::all(); 
        $statistics = Statistic::all()->keyBy('title');
        return view('frontend.about', compact('aboutContent', 'settings', 'reviews','statistics'));
    }
    

    public function showProduct($id)
    {
       
        $newProducts = NewProduct::findOrFail($id); 
        
        return view('frontend.product', compact('newProducts'));
    }
    public function manageTechnologies()
    {
        $technologies = Technology::all();

       
        return view('backend.home.languages', compact('technologies'));
    }

   
    public function blog(Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $settings = Setting::first(); 
        $search = $request->input('search');
        $tag = $request->input('tag');
        $category = $request->input('category');
        
        $blogs = Blog::with('category', 'tags')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->when($tag, function ($query, $tag) {
                return $query->whereHas('tags', function ($q) use ($tag) {
                    $q->where('tags.id', $tag);
                });
            })
            ->when($category, function ($query, $category) {
                return $query->whereHas('category', function ($q) use ($category) {
            
                    $q->where('categories.id', $category);
                });
            })
            ->paginate(10);
    
        $recentBlogs = Blog::latest()->take(5)->get();
        return view('frontend.blog', compact('blogs', 'categories', 'tags', 'recentBlogs','settings'));
    }
    
    

    public function showBlog(Blog $blog)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $comments = $blog->comments;
        $recentBlogs = Blog::latest()->take(5)->get();

        return view('frontend.blog_show', compact('blog', 'categories', 'tags', 'comments','recentBlogs'));
    }

    
    public function storeComment(Request $request, Blog $blog)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog->comments()->create($request->all());

        return redirect()->route('frontend.blogs.show', $blog->slug)->with('success', 'Comment added successfully.');
    }
    public function manageNewProducts()
    {
        $new_products = NewProduct::with('modules')->paginate(10);
        return view('backend.new_products.index', compact('new_products')); 
    }
    public function manageModules()
    {
        $modules = Module::all();
            return view('backend.modules', compact('modules'));
    }
    
    
    public function digitalTransformation()
    {
        $reviews = Review::all(); 
        
        return view('frontend.services.digital-transformation', compact('reviews'));
    }
    
public function uiuxDesignAgencies() {
   
    $reviews = Review::all();
    
    return view('frontend.services.uiux-design-agencies', compact('reviews'));
}
public function manageCategories(Request $request)
{
    $search = $request->input('search', '');

    $perPage = $request->input('per_page', 10);

    $categories = Category::where('name', 'like', '%' . $search . '%')
        ->paginate($perPage);

    return view('backend.blogs.manage-categories-tags', compact('categories', 'search', 'perPage'));
}

public function manageTags(Request $request)
{
    $search = $request->input('search', '');
    $perPage = $request->input('per_page', 10);

    $tags = Tag::where('name', 'like', "%{$search}%")
        ->paginate($perPage);

    return view('backend.blogs.manage-tags', compact('tags', 'search', 'perPage'));
}

public function contactPage()
{
  
    $settings = Setting::first(); 
   
    return view('frontend.contract_us', compact('settings'));
}
public function dashboard(VisitorsChart $chart)
{
    // Fetch real-time visitor count

    $totalBlogs = Blog::count();
    $totalProducts = NewProduct::count();
    $totalContacts = Contact::count();
    $totalReviews = Review::count();
    $totalImages = Media::where('type', 'gallery')->count();
    $totalMedia = Media::count();
    $totalVideos = Media::where('type', 'video')->count();
    $totalLanguages = Technology::count();
    $totalJobPosts = Job::count();
    $totalVisitorsToday = Visitor::whereDate('visited_at', today())->count();

    // Calculate total visitors for this week
    $totalVisitorsThisWeek = Visitor::whereBetween('visited_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                                      ->count();

    // Weekly visitors
    $weeklyVisitorsData = Visitor::whereBetween('visited_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                                  ->selectRaw('DAYNAME(visited_at) as day, COUNT(*) as count')
                                  ->groupBy('day')
                                  ->pluck('count', 'day')
                                  ->toArray();
    $weeklyLabels = array_keys($weeklyVisitorsData);
    $weeklyData = array_values($weeklyVisitorsData);

    // Monthly visitors
    $monthlyVisitorsData = Visitor::whereMonth('visited_at', Carbon::now()->month)
                                   ->selectRaw('DAY(visited_at) as day, COUNT(*) as count')
                                   ->groupBy('day')
                                   ->pluck('count', 'day')
                                   ->toArray();
    $monthlyLabels = array_keys($monthlyVisitorsData);
    $monthlyData = array_values($monthlyVisitorsData);

    // Yearly visitors
    $yearlyVisitorsData = Visitor::whereYear('visited_at', Carbon::now()->year)
                                  ->selectRaw('MONTHNAME(visited_at) as month, COUNT(*) as count')
                                  ->groupBy('month')
                                  ->pluck('count', 'month')
                                  ->toArray();
    $yearlyLabels = array_keys($yearlyVisitorsData);
    $yearlyData = array_values($yearlyVisitorsData);

    // Generate the charts
    $weeklyChart = $chart->build($weeklyLabels, $weeklyData);
    $monthlyChart = $chart->build($monthlyLabels, $monthlyData);
    $yearlyChart = $chart->build($yearlyLabels, $yearlyData);

//  $topUrls = PageView::orderBy('views', 'desc')->take(10)->get();
$topUrls = PageView::where('url', 'LIKE', '%192.168.1.150%')  
    ->orWhere('url', 'LIKE', '/ambalaitweb/nur/public/%')  
    ->orderBy('views', 'desc')
    ->take(15)
    ->get();


    $topBlogs = Blog::with('pageViews')
    ->withCount('pageViews') // Assumes that the Blog has a relation 'pageViews'
    ->orderBy('page_views_count', 'desc')
    ->take(10)
    ->get();
    $totalArticleViews = PageView::where('url', 'LIKE', '%/blog/%')->sum('views');
    // Fetch top countries by visitor count
    $countryData = Visitor::select('country', DB::raw('count(*) as total'))
    ->groupBy('country')
    ->orderBy('total', 'desc')
    ->take(10)
    ->get();
    return view('backend.dashboard', compact(
       
        'totalBlogs', 
        'totalProducts', 
        'totalContacts', 
        'totalReviews', 
        'totalImages', 
        'totalMedia', 
        'totalVideos', 
        'totalLanguages', 
        'totalJobPosts', 
        'totalVisitorsToday', 
        'totalVisitorsThisWeek', 
        'weeklyChart',
        'monthlyChart',
        'yearlyChart',
           'topUrls',
         'topBlogs',  
          'countryData'
        
    ));
}


public function getFilteredVisitors(Request $request)
{
    $filter = $request->input('filter', 'daily'); // Default to daily if no filter is provided
    $visitorsQuery = Visitor::query();

    switch ($filter) {
        case 'daily':
            $visitorsQuery->whereDate('visited_at', Carbon::today());
            break;

        case 'weekly':
            $visitorsQuery->whereBetween('visited_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
            break;

        case 'monthly':
            $visitorsQuery->whereMonth('visited_at', Carbon::now()->month);
            break;

        case 'yearly':
            $visitorsQuery->whereYear('visited_at', Carbon::now()->year);
            break;
    }

    // Group by day for chart data
    $visitors = $visitorsQuery->selectRaw('DATE(visited_at) as date, COUNT(*) as count')
                              ->groupBy('date')
                              ->get();

    return response()->json($visitors);
}



// tag related blog for services 
public function showAdaptiveSoftwareDevelopment()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->whereIn('name', ['Adaptive Software', 'Software Development','software development']);
    })->latest()->take(3)->get();

    return view('frontend.services.adaptive-software-development', compact('relatedBlogs'));
}

public function showITConsultingBlogs()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['it consulting', 'It Consulting','IT']); 
    })->latest()->take(3)->get();

    return view('frontend.services.it-consulting-services', compact('relatedBlogs'));
}
public function showCybersecurityServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['Cybersecurity Services', 'cybersecurity services','Cybersecurity','cybersecurity']); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.cybersecurity-companies', compact('relatedBlogs'));
}
public function showWebDevelopmentServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['Web Development', 'web development','Web','web']); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.web-application-development-services', compact('relatedBlogs'));
}

public function showMobileDevelopmentServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name',  ['Mobile App Development', 'mobile app development','aobile app ','Mobile App']); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.mobile-app-development', compact('relatedBlogs'));
}
public function showQualityAssuranceAndTestingServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['Quality Assurance and Testing', 'quality assurance and testing','Quality Assurance']); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.software-quality-and-assurance', compact('relatedBlogs'));
}
public function showApiDevelopmentServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['API Development', 'API development','API','api']); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.api-development', compact('relatedBlogs'));
}
public function showERPSolutionServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['ERP Solution', 'ERP solution','erp','ERP']); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.enterprise-resource-planning-systems', compact('relatedBlogs'));
}
public function showUiUxServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['UI/UX Design', 'UI/UX design','UX','UI']); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.uiux-design-agencies', compact('relatedBlogs'));
}
public function showDigitalTransformationConsultantServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['Digital Transformation Consultant', 'digital transformation consultant','Digital Transformation',]); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.digital-transformation', compact('relatedBlogs'));
}
public function showEcommerceDevelopmentServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['E-commerce Development', 'E-commerce development','E-commerce',]); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for cybersecurity services tag.');
    }

    return view('frontend.services.build-ecommerce-websites', compact('relatedBlogs'));
}
public function showDigitalMarketingServices()
{
    $relatedBlogs = Blog::whereHas('tags', function ($query) {
        $query->where('name', ['Digital Marketing', 'digital marketing','marketing',]); 
    })->latest()->take(3)->get();
    if ($relatedBlogs->isEmpty()) {
        logger()->info('No related blogs found for Digital marketing services tag.');
    }

    return view('frontend.services.digital-marketing-agency', compact('relatedBlogs'));
}

}
