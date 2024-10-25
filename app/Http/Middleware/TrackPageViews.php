<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageView;

class TrackPageViews
{
    public function handle(Request $request, Closure $next)
    {
        // Get the current URL (without query parameters)
        $currentUrl = $request->url();

        // Find the page view record or create one
        $pageView = PageView::firstOrCreate(
            ['url' => $currentUrl],
            ['views' => 0]
        );

        // Increment the view count
        $pageView->increment('views');

        return $next($request);
    }
}
