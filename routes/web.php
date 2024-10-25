<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CareerContentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainSettingsController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NewProductFaqController;
use App\Http\Controllers\NewProductModuleController;
use App\Http\Controllers\NewProductController;
use App\Models\Job;
use App\Models\Setting;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceTagRelatedBlogController;
use App\Http\Controllers\StatisticController;




// Admin Authentication Routes
// Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
// Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');
// Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/dashboard/visitors', [PageController::class, 'getFilteredVisitors']);

// Frontend Routes
Route::name('frontend.')->group(function () {
    // Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('frontend.service.show');
    Route::get('/products/{slug}', [FrontendProductController::class, 'show'])->name('frontend.product.show');
    // Route::get('/', [SliderController::class, 'showHomePage'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
    Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    // Static Pages
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [ServiceController::class, 'index_frontend'])->name('services');
    Route::get('/contract-us', [PageController::class, 'contactPage'])->name('contact');

    Route::view('/terms-of-service', 'frontend.partial.terms-of-service')->name('terms-of-service');
Route::view('/privacy-policy', 'frontend.partial.privacy-policy')->name('privacy-policy');
  // Service Detail Pages
  Route::get('/services/adaptive-software-development', [ServiceTagRelatedBlogController::class, 'showAdaptiveSoftwareDevelopment'])->name('services.adaptive-software-development');

    // Service Detail Pages - Corrected Routes
    Route::get('/services/adaptive-software-development', function () {
        return view('frontend.services.adaptive-software-development');
    })->name('services.adaptive-software-development');

    Route::get('/services/web-application-development-services', function () {
        return view('frontend.services.web-application-development-services');
    })->name('services.web-application-development-services');

    Route::get('/services/mobile-app-development', function () {
        return view('frontend.services.mobile-app-development');
    })->name('services.mobile-app-development');

    Route::get('/services/cybersecurity-companies', function () {
        return view('frontend.services.cybersecurity-companies');
    })->name('services.cybersecurity-companies');

    Route::get('/services/software-quality-and-assurance', function () {
        return view('frontend.services.software-quality-and-assurance');
    })->name('services.software-quality-and-assurance');

    Route::get('/services/enterprise-resource-planning-systems', function () {
        return view('frontend.services.enterprise-resource-planning-systems');
    })->name('services.enterprise-resource-planning-systems');

    Route::get('/services/api-development', function () {
        return view('frontend.services.api-development');
    })->name('services.api-development');

    Route::get('/services/uiux-design-agencies', function () {
        return view('frontend.services.uiux-design-agencies');
    })->name('services.uiux-design-agencies');

    Route::get('/services/it-consulting-services', function () {
        return view('frontend.services.it-consulting-services');
    })->name('services.it-consulting-services');

    Route::get('/services/digital-transformation', function () {
        return view('frontend.services.digital-transformation');
    })->name('services.digital-transformation');

    Route::get('/services/build-ecommerce-websites', function () {
        return view('frontend.services.build-ecommerce-websites');
    })->name('services.build-ecommerce-websites');

    Route::get('/services/digital-marketing-agency', function () {
        return view('frontend.services.digital-marketing-agency');
    })->name('services.digital-marketing-agency');
  
    // services////////////////////////
    Route::get('/services/digital-transformation', [PageController::class, 'digitalTransformation'])->name('services.digital-transformation');
// In routes/web.php
Route::get('/services/uiux-design-agencies-details', [PageController::class, 'uiuxDesignAgencies'])->name('services.uiux-design-agencies-details');
Route::get('/services/adaptive-software-development', [PageController::class, 'showAdaptiveSoftwareDevelopment'])->name('services.adaptive-software-development');
Route::get('/services/it-consulting-services', [PageController::class, 'showITConsultingBlogs'])->name('services.it-consulting-services');
Route::get('/services/cybersecurity-companies', [PageController::class, 'showCybersecurityServices'])->name('services.cybersecurity-companies');
Route::get('/services/web-application-development-services', [PageController::class, 'showWebDevelopmentServices'])->name('services.web-application-development-services');
Route::get('/services/mobile-app-development', [PageController::class, 'showMobileDevelopmentServices'])->name('services.mobile-app-development');
Route::get('/services/software-quality-and-assurance', [PageController::class, 'showQualityAssuranceAndTestingServices'])->name('services.software-quality-and-assurance');
Route::get('/services/api-development', [PageController::class, 'showApiDevelopmentServices'])->name('services.api-development');
Route::get('/services/enterprise-resource-planning-systems', [PageController::class, 'showERPSolutionServices'])->name('services.enterprise-resource-planning-systems');
Route::get('/services/uiux-design-agencies', [PageController::class, 'showUiUxServices'])->name('services.uiux-design-agencies');
Route::get('/services/digital-transformation', [PageController::class, 'showDigitalTransformationConsultantServices'])->name('services.digital-transformation');
Route::get('/services/build-ecommerce-websites', [PageController::class, 'showEcommerceDevelopmentServices'])->name('services.build-ecommerce-websites');
Route::get('/services/digital-marketing-agency', [PageController::class, 'showDigitalMarketingServices'])->name('services.digital-marketing-agency');










    // Other Static and Dynamic Routes
    Route::get('/products', [FrontendProductController::class, 'index'])->name('product.index');
    Route::get('/products/{slug}', [FrontendProductController::class, 'show'])->name('product.details');
    
    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/contract_us', function () {
        $settings = Setting::first(); 
        return view('frontend.contract_us', compact('settings'));
    })->name('contract_us');

    Route::get('/gallery', [MediaController::class, 'index_frontend'])->name('gallery');
    
    // Job and Career Routes
    Route::get('/career', [JobController::class, 'index'])->name('career');
    Route::get('/jobs/{slug}', [JobController::class, 'show'])->name('jobs.show');

    Route::get('/apply/{slug}', function ($slug) {
        $job = Job::where('slug', $slug)->firstOrFail();
        $settings = Setting::first();
        return view('frontend.apply', compact('job', 'settings'));
    })->name('apply');
    Route::post('/apply', [JobApplicationController::class, 'submitApplication'])->name('apply.submit');
    
    // Blog Routes
    Route::get('/blog', [PageController::class, 'blog'])->name('blog');
    Route::get('/blogs/{blog:slug}', [PageController::class, 'showBlog'])->name('blogs.show');
    Route::post('/blogs/{blog}/comment', [PageController::class, 'storeComment'])->name('blogs.comment');
});


// Backend Routes
Route::prefix('backend')->name('backend.')->middleware('auth.admin')->group(function () {
    Route::post('logout', [AdminController::class, 'logout'])->name('logout');
        // Dashboard Route for GET Requests
        Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard'); // Display Dashboard
        Route::get('/dashboard/visitors', [PageController::class, 'getFilteredVisitors']);

        Route::get('/modules', [HomeController::class, 'manageModules'])->name('modules.index');
        Route::get('/about', function () {
            return view('backend.about');
        })->name('about');
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::get('/service', function () {
        return view('backend.service');
    })->name('service');

    Route::get('/product', function () {
        return view('backend.product');
    })->name('product');

    Route::get('/blog', function () {
        return view('backend.blog');
    })->name('blog');

    Route::get('/gallery', function () {
        return view('backend.gallery');
    })->name('gallery');

    Route::get('/contacts', function () {
        return view('backend.contacts');
    })->name('contacts');
    Route::get('/service', function () {
        return view('backend.service');
    })->name('service');
    Route::get('/settings', function () {
        return view('backend.settings');
    })->name('settings');

    Route::resource('sliders', SliderController::class); 
    Route::get('/blog/{slug}', [PageController::class, 'showBlog'])->name('frontend.blog.show');


  // Slider Routes
  Route::get('/home/image-slider', [SliderController::class, 'index'])->name('home.image-slider'); // For GET requests
  Route::post('/home/image-slider', [SliderController::class, 'store'])->name('home.image-slider.store'); // For POST requests


  Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    // Route::get('/home/image-slider', [HomeController::class, 'imageSlider'])->name('home.image-slider');
    Route::get('/home/partner', [HomeController::class, 'partner'])->name('home.partner');
    Route::put('partners/{partner}', [PartnerController::class, 'update'])->name('partners.update');
    Route::get('/home/review', [PageController::class, 'review'])->name('home.review');
  // GET request for viewing the languages
  Route::get('/home/languages', [TechnologyController::class, 'index'])->name('home.languages');

  // POST request for handling form submissions or AJAX requests
  Route::post('/home/languages', [TechnologyController::class, 'store'])->name('home.languages.store');

    Route::get('/job', [JobController::class, 'index_backend'])->name('job');
    // Route::get('/career', [JobController::class, 'index'])->name('career');
    Route::get('/apply', [JobApplicationController::class, 'index'])->name('apply');
    // Route::get('/backend/contacts', [ContactController::class, 'index'])->name('backend.contacts');
    Route::get('/career', [CareerContentController::class, 'index'])->name('career');  // For GET requests
    Route::post('/career', [CareerContentController::class, 'store'])->name('career.store'); 

    // Admin Routes for Job Management
    Route::get('statistics', [StatisticController::class, 'index'])->name('statistics.index');
    Route::get('statistics/create', [StatisticController::class, 'create'])->name('statistics.create');
    Route::post('statistics', [StatisticController::class, 'store'])->name('statistics.store');
    Route::get('statistics/{id}/edit', [StatisticController::class, 'edit'])->name('statistics.edit');
    Route::put('statistics/{id}', [StatisticController::class, 'update'])->name('statistics.update');
    Route::get('statistics', [StatisticController::class, 'index'])->name('statistics.index');
    Route::delete('statistics/{id}', [StatisticController::class, 'destroy'])->name('statistics.destroy');


    // About Routes
  Route::get('/about', [AboutContentController::class, 'index'])->name('about.index'); // Show About page
  Route::post('/about', [AboutContentController::class, 'store'])->name('about.store'); // Store About page data
  Route::put('/about/update-about', [AboutContentController::class, 'updateAbout'])->name('about.updateAbout'); // Update About content
  Route::put('/about/update-vision', [AboutContentController::class, 'updateVision'])->name('about.updateVision'); // Update Vision content
  Route::put('/about/update-mission', [AboutContentController::class, 'updateMission'])->name('about.updateMission'); // Update Mission content

    Route::get('/jobs', [JobController::class, 'index_backend'])->name('jobs.index');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
    Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
    Route::get('/jobs/{id}/applicants', [JobController::class, 'showApplicants'])->name('jobs.applicants');
    Route::delete('/applicants/{id}', [JobApplicationController::class, 'destroy'])->name('applicants.destroy');

Route::get('/applicants/{id}/download', [JobApplicationController::class, 'downloadResume'])->name('backend.applicants.download');

   //career
    Route::get('/career-content', [CareerContentController::class, 'index'])->name('career_content.index');
    Route::post('/career-content', [CareerContentController::class, 'update'])->name('career_content.update');


// FAQ Management Routes
Route::post('/faq/store', [CareerContentController::class, 'storeFaq'])->name('faq.store');
Route::post('/faq/update', [CareerContentController::class, 'updateFaq'])->name('faq.update');
Route::delete('/faq/delete', [CareerContentController::class, 'deleteFaq'])->name('faq.delete');

    



    // Dashboard and other pages
    // Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/tables', [PageController::class, 'tables'])->name('tables');
    Route::get('/charts', [PageController::class, 'charts'])->name('charts');
    Route::get('/home/languages', [PageController::class, 'manageTechnologies'])->name('languages.index');
    // Route::get('/job', [PageController::class, 'job'])->name('job');

    // Generic route for other backend pages
    Route::get('/{page}', [PageController::class, 'show'])->name('page');

    // Contact management in the backend
    Route::get('/backend/contact', [ContactController::class, 'index'])->name('backend.contacts');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    Route::get('/gallery', [MediaController::class, 'index'])->name('index');
     // Media Management Routes
     Route::prefix('media')->name('media.')->group(function () {
        Route::get('/image', [MediaController::class, 'indexImages'])->name('images.index');
        Route::post('/store-gallery-image', [MediaController::class, 'storeGalleryImage'])->name('storeGalleryImage');
        Route::put('/update-gallery-image/{id}', [MediaController::class, 'updateGalleryImage'])->name('updateGalleryImage');
        Route::delete('/delete-gallery-image/{id}', [MediaController::class, 'deleteGalleryImage'])->name('deleteGalleryImage');
        
        // Add the missing route for managing categories
        Route::post('/store-category', [MediaController::class, 'storeCategory'])->name('storeCategory');
        Route::put('/update-category/{id}', [MediaController::class, 'updateCategory'])->name('updateCategory');
        Route::delete('/delete-category/{id}', [MediaController::class, 'deleteCategory'])->name('deleteCategory');
    
        // Videos management routes
        Route::get('/video', [MediaController::class, 'indexVideos'])->name('videos.index');
        Route::post('/store-video', [MediaController::class, 'storeVideo'])->name('storeVideo');
        Route::put('/update-video/{id}', [MediaController::class, 'updateVideo'])->name('updateVideo');
        Route::delete('/delete-video/{id}', [MediaController::class, 'deleteVideo'])->name('deleteVideo');
    
        // Media links management routes
        Route::get('/link', [MediaController::class, 'indexMediaLinks'])->name('links.index');
        Route::post('/store-media-link', [MediaController::class, 'storeMediaLink'])->name('storeMediaLink');
        Route::put('/update-media-link/{id}', [MediaController::class, 'updateMediaLink'])->name('updateMediaLink');
        Route::delete('/delete-media-link/{id}', [MediaController::class, 'deleteMediaLink'])->name('deleteMediaLink');
    });
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');

    
  // Partner routes
    Route::get('home/partner', [PartnerController::class, 'create'])->name('home.partner');
    Route::post('partners', [PartnerController::class, 'store'])->name('partners.store');
    Route::delete('partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy'); // Add this line

    Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
    Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::put('reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
    

   
    Route::get('/home/languages', [TechnologyController::class, 'index'])->name('home.languages'); // Correct route definition
    Route::post('/languages/store', [TechnologyController::class, 'store'])->name('languages.store');
    Route::put('/languages/{technology}', [TechnologyController::class, 'update'])->name('languages.update');
    Route::delete('/languages/{technology}', [TechnologyController::class, 'destroy'])->name('languages.destroy');

    // Route::resource('product', ProductController::class)->except(['show']);
    Route::resource('new_products', NewProductController::class)->except(['show']); // Exclude show if not needed

    // Resource Routes for Modules
    Route::resource('modules', ModuleController::class)->except(['show']);

    Route::get('new_products', [PageController::class, 'manageNewProducts'])->name('new_products.index');

// Routes for NewProduct Management
Route::resource('backend/new_products', NewProductController::class);
Route::get('/modules', [PageController::class, 'manageModules'])->name('modules.index');
// Routes for FAQ Management
Route::get('/new_products/{new_product}/faqs', [NewProductFaqController::class, 'index'])->name('new_products.faqs.index');
Route::get('/new_products/{new_product}/faqs/create', [NewProductFaqController::class, 'create'])->name('new_products.faqs.create');
Route::post('/new_products/{new_product}/faqs', [NewProductFaqController::class, 'store'])->name('new_products.faqs.store');
Route::delete('/new_products/faqs/{faq}', [NewProductFaqController::class, 'destroy'])->name('new_products.faqs.destroy');
Route::get('/new_products/{new_product}/faqs/{faq}/edit', [NewProductFaqController::class, 'edit'])->name('new_products.faqs.edit');
Route::put('/new_products/{new_product}/faqs/{faq}', [NewProductFaqController::class, 'update'])->name('new_products.faqs.update');

// Routes for Module Management
// Routes for Module Management within a Product
Route::get('/new_products/{new_product}/modules', [NewProductModuleController::class, 'index'])->name('new_products.modules.index');
Route::get('/new_products/{new_product}/modules/create', [NewProductModuleController::class, 'create'])->name('new_products.modules.create');
Route::post('/new_products/{new_product}/modules', [NewProductModuleController::class, 'store'])->name('new_products.modules.store');
Route::get('/new_products/{new_product}/modules/{module}/edit', [NewProductModuleController::class, 'edit'])->name('new_products.modules.edit');
Route::put('/new_products/{new_product}/modules/{module}', [NewProductModuleController::class, 'update'])->name('new_products.modules.update');
Route::delete('/new_products/modules/{module}', [NewProductModuleController::class, 'destroy'])->name('new_products.modules.destroy');


    // GET request for viewing the blog
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    // POST request for handling form submissions or AJAX requests
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    
   // Blog Routes
   Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index'); // List all blogs
   Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create'); // Show form to create a new blog
   Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store'); // Store new blog (POST method)
   Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit'); // Show form to edit a blog
   Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update'); // Update an existing blog
   Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy'); // Delete a blog
   Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show'); // View a single blog


    //blog catagory
    Route::delete('/categories/{id}/destroy', [BlogController::class, 'destroyCategory'])->name('categories.destroy');

    // Category Routes
    Route::post('/categories/store', [BlogController::class, 'storeCategory'])->name('categories.store'); 

    Route::post('/tags/store', [BlogController::class, 'storeTag'])->name('tags.store');
    Route::delete('/tags/{id}', [BlogController::class, 'destroyTag'])->name('tags.destroy');

    
// Routes for Main Settings
Route::get('/main_settings', [MainSettingsController::class, 'index'])->name('main_settings.index');
Route::post('/main_settings', [MainSettingsController::class, 'update'])->name('main_settings.update');

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories', [PageController::class, 'manageCategories'])->name('categories.index');

Route::get('/backend/blogs/manage-categories-tags', [PageController::class, 'manageCategories'])->name('manage-categories');
Route::get('backend/manage-tags', [PageController::class, 'manageTags'])->name('manage-tags');

Route::post('/storeVideo', [SliderController::class, 'storeVideo'])->name('sliders.storeVideo');

});