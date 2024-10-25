<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\NewProduct;
use App\Models\MainSetting;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share $products and $main_settings globally with all views
        View::composer('*', function ($view) {
            $newProducts = NewProduct::all();
            $main_settings = MainSetting::all()->pluck('value', 'key')->toArray(); // Fetch all settings as key-value pairs

            // Pass settings and site logo to views
            $view
                 ->with('newProducts', $newProducts)
                 ->with('main_settings', $main_settings)
                 ->with('siteLogo', $main_settings['site_logo'] ?? null); // Share the site logo with all views
        });
    }

    public function register()
    {
        //
    }
}
