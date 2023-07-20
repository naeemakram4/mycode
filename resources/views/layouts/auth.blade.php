<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.auth.head')

<!--begin::Body-->
<body id="kt_body" class="auth-bg">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url(/assets/media/auth/contact-banner.jpg);">
            <!--begin: Aside Container-->
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <!--begin: Aside header-->
                <a href="javascript:void(0);" class="flex-column-auto mt-5 pb-lg-0 pb-10">
                    <img src="{{ asset('assets/media/logos/avatar.png') }}" class="h-100px h-md-50px logo" alt="">
                    <h1 class="fs-1 text-white">{{ config('app.name') }}</h1>
                </a>
                <!--end: Aside header-->
                <!--begin: Aside content-->
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="fs-1 mb-5 text-white">Customer Portal</h3>
                    <h3 class="fs-2 mb-5 text-white">Welcome to {{ config('app.name') }}!</h3>
                    <p class="fw-lighter text-white opacity-80">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <!--end: Aside content-->
                <!--begin: Aside footer for desktop-->
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold text-white">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}</div>
                    <div class="d-flex">
                        <a href="javascript:void(0);" class="text-white">Privacy</a>
                        <a href="javascript:void(0);" class="text-white ms-10">Legal</a>
                        <a href="javascript:void(0);" class="text-white ms-10">Contact</a>
                    </div>
                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->
        @yield('content')
    <!--begin::Content footer for mobile-->
        <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
            <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}</div>
            <div class="d-flex order-1 order-sm-2 my-2">
                <a href="javascript:void(0);" class="text-dark text-hover-primary">Privacy</a>
                <a href="javascript:void(0);" class="text-dark text-hover-primary ms-4">Legal</a>
                <a href="javascript:void(0);" class="text-dark text-hover-primary ms-4">Contact</a>
            </div>
        </div>
        <!--end::Content footer for mobile-->
    </div>
</div>
<!--end::Root-->
<!--end::Main-->
@include('partials.auth.scripts')
</body>
<!--end::Body-->
</html>
