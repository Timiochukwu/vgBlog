<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        if ($token !== 'vg@123') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
