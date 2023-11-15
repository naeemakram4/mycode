@extends('layouts.admin-auth')
@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::SignIn Form-->
            <form method="POST" action="{{ route('employee.login') }}" class="form w-100">
                @csrf
                <div class="text-center mb-5">
                    <h1 class="text-dark mb-3">Sign In to {{ config('app.name') }} Employee</h1>
                </div>
                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <label class="form-label fs-6 fw-bolder text-dark required">Username</label>
                    <input class="form-control form-control-solid" type="text" name="user_name" autocomplete="off" required autofocus/>
                    @error('user_name')
                    <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-5">
                    <div class="d-flex flex-stack mb-2">
                        <label class="form-label fw-bolder text-dark fs-6 mb-0 required">Password</label>
                    </div>
                    <input class="form-control form-control-solid" type="password" name="password" autocomplete="off" required/>
                    @error('password')
                    <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Input group-->
                <div class="text-center">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Login</span>
                    </button>
                </div>
            </form>
            <!--end::SignIn Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
@endsection
