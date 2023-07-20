@extends('layouts.auth')
@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
            <!--begin::Reset Password Form-->
            <form method="POST" action="{{ route('password.update') }}" class="form w-100">
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $token }}">
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">
                        {{ __('Update Your Password') }}
                    </h1>
                    <!--end::Title-->

                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">
                        Already have reset your password ?
                        <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->

                <!--begin::Input group-->
                <div class="fv-row mb-10 d-none">
                    <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Email') }}</label>
                    <input class="form-control form-control-solid @error('email') is-invalid @enderror" readonly type="email" name="email" autocomplete="off"
                           value="{{ old('email', $email) }}" required/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">
                            {{ __('Password') }}
                        </label>
                        <!--end::Label-->

                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password"
                                   name="password" autocomplete="new-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                  data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->

                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Hint-->
                    <div class="text-muted">
                        {{ __('Use 8 or more characters with a mix of letters, numbers & symbols.') }}
                    </div>
                    <!--end::Hint-->
                </div>
                <!--end::Input group--->

                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Confirm Password') }}</label>
                    <input class="form-control form-control-solid" type="password" name="password_confirmation"
                           autocomplete="off" />
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                        Reset Password
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Reset Password Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
@endsection
