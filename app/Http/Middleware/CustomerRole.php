<?php
declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->ability($request->route()->action['as'])) {
            return $next($request);
        }

        return redirect()->back()->withErrors('Invalid request!');
    }
}
