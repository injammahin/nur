<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('frontend.admin.login.form')->with('error', 'You must be logged in to access the admin area.');
        }

        return $next($request);
    }
}
