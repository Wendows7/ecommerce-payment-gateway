<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        check if user is authenticated
        if (!auth()->check()) {
            return redirect()->route('auth.login')->with("error", "You must be logged in to access this page.");
        }

        return $next($request);

    }
}
