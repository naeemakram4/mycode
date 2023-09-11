<?php
declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
class EmployeeAuthenticate extends Middleware
{
    protected function authenticate($request, array $guards)
    {
        if ($this->auth->guard('employee')->check()) {
            return $this->auth->shouldUse('employee');
        }
        $this->unauthenticated($request, ['employee']);
    }

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('employee.login');
        }
    }
}
