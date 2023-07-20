@extends('layouts.auth')
@section('pageTitle', $pageTitle)

@section('content')

    <!--begin::Content-->
    <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
        <!--begin::Content header-->
{{--        <div class="position-absolute end-0 top-0 text-end mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">--}}
{{--            <span class="font-weight-bold text-gray-500">Dont have an account yet?</span>--}}
{{--            <a href="{{ route('register') }}" class="font-weight-bold ms-2">Sign Up!</a>--}}
{{--        </div>--}}
        <!--end::Content header-->
        <!--begin::Content body-->
        <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
            <!--begin::Signin-->
            <div class="login-form login-signin">
                <div class="text-center mb-10 mb-lg-20">
                    <h3 class="fs-1">Sign In</h3>
                    <p class="text-muted fw-bold">Enter your username and password</p>
                </div>
                <!--begin::Form-->
                <form method="POST" action="{{ route('login') }}" class="form w-100">
                    @csrf
                    <div class="form-group mb-5">
                        <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Username" name="user_name" autocomplete="off" required autofocus>
                        @error('user_name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" required>
                        @error('password')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!--begin::Action-->
                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                        <a href="{{ route('password.request') }}" class="text-gray-500 text-hover-primary my-3 me-2" id="kt_login_forgot">Forgot Password ?</a>
                        <button type="submit" class="btn btn-primary fw-bold px-9 py-4 my-3">Sign In</button>
                    </div>
                    <!--end::Action-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Signin-->
        </div>
        <!--end::Content body-->
    </div>
    <!--end::Content-->
@endsection
