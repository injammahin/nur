<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use App\Models\NewProduct;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Share services data with all views
        View::composer('*', function ($view) {
            $services = Service::all();
            $view->with('services', $services);
        });
        View::composer('includes.footer', function ($view) {
            $latestServices = Service::orderBy('created_at', 'desc')->take(5)->get();
            $latestProducts = NewProduct::orderBy('created_at', 'desc')->take(5)->get();
            
            $view->with('latestServices', $latestServices);
            $view->with('latestProducts', $latestProducts);
        });
    }
    
}
