<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        if ($token !== '8|IpUScXGBhMDHb3gbN9dWePN1SEZ940uJCXBv4N7X72db15df"') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
