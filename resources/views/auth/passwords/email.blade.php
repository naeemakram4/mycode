@extends('layouts.auth')
@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Content header-->
    <div class="position-absolute top-0 end-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
        <span class="fw-bold text-gray-500">Dont have an account!</span>
        <a href="{{ route('register') }}" class="fw-bold ms-2">Sign Up!</a>
    </div>
    <!--end::Content header-->
    <!--begin::Content body-->
    <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
        <!--begin::Forgot-->
        <div class="login-form login-forgot">
            <div class="text-center mb-10 mb-lg-20">
                <h3 class="fs-1">Forgotten Password ?</h3>
                <p class="text-muted fw-bold">Enter your email to reset your password</p>
            </div>
            <!--begin::Form-->
            <form method="POST" action="{{ route('password.email') }}" class="form w-100">
                @csrf

                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-label text-gray-900 fs-6">{{ __('Email') }}</label>
                    <input class="form-control form-control-solid @error('email') is-invalid @enderror" type="email" name="email"  value="{{ old('email') }}" autocomplete="email" autofocus/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <!--end::Input group-->

                <div class="form-group d-flex flex-wrap flex-center">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-light-primary font-weight-bold my-3 mx-4">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-primary font-weight-bold my-3 mx-4">Submit</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Forgot-->
    </div>
    <!--end::Content body-->
@endsection
