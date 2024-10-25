<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;

class TrackVisitors
{
    public function handle($request, Closure $next)
    {
        // Check if the IP address is already stored today
        $ipAddress = $request->ip();
        $exists = Visitor::where('ip_address', $ipAddress)
            ->whereDate('visited_at', today())
            ->exists();

        // If not exists, create a new record
        if (!$exists) {
            Visitor::create([
                'ip_address' => $ipAddress,
            ]);
        }

        return $next($request);
    }
}



   