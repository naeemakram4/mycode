<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $pageTitle = 'Customer Login';
        view()->share('pageTitle', $pageTitle);
    }

    protected function authenticated(Request $request, $user): RedirectResponse
    {
        $user->update([
            'last_login' => Carbon::now()
        ]);

        return redirect()->route('customer.dashboard');
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
        return redirect()->route('login');
    }

    protected function guard()
    {
        return Auth::guard('web');
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
            'role_id' => [Role::CLIENT_ROLE], //Only Client roles allowed.
        ];
    }
}
