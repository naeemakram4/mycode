<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends AdminController
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN;

    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }

    public function adminLoginForm()
    {
        $pageTitle = 'Login';

        $viewParams = [
            'pageTitle' => $pageTitle
        ];
        return view('auth.admin.login', $viewParams);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('admin.dashboard');
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
        return redirect()->route('admin.login');
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
            'status' => [Admin::STATUS_ACTIVE],
        ];
    }

    protected function guard()
    {
        return Auth::guard('admins');
    }
}
