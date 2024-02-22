<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::EMPLOYEE;

    public function __construct()
    {
        $this->middleware('employee.guest')->except('logout');
    }

    public function loginForm()
    {
        $pageTitle = 'Employee Login';

        $viewParams = [
            'pageTitle' => $pageTitle
        ];
        return view('auth.employee.login', $viewParams);
    }

    protected function authenticated(Request $request, $user)
    {
        $user->update([
            'last_login' => Carbon::now()
        ]);

        return redirect()->route('employee.dashboard');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    protected function loggedOut(Request $request)
    {
        return redirect()->route('employee.login');
    }

    public function username(): string
    {
        return 'user_name';
    }

    protected function credentials(Request $request)
    {
        return [
            $this->username() => $request->user_name,
            'password' => $request->password,
            'status' => [User::STATUS_ACTIVE],
            'role_id' => [Role::EMPLOYEE_ROLE]
        ];
    }

    protected function guard()
    {
        return Auth::guard('employee');
    }
}
