<?php
declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EmployeeRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->ability($request->route()->action['as'])) {
            return $next($request);
        }

        return redirect()->back()->withErrors('Invalid request!');
    }
}
