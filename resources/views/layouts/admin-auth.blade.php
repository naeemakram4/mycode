<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.auth.head')

<!--begin::Body-->
<body id="kt_body" class="auth-bg">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-size: cover; background-image: url(../assets/media/illustrations/sketchy-1/bg-3.jpg)">
        @yield('content')
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!--end::Main-->
@include('partials.auth.scripts')
</body>
<!--end::Body-->
</html>
