<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admins')->check()) {
            return redirect(RouteServiceProvider::ADMIN);
        }
        return $next($request);
    }
}
