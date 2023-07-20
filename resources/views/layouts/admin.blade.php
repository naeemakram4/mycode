<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.admin.head')
<body id="kt_body"
      class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
    @include('partials.admin.aside')
    <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        @include('partials.admin.header')
        <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            {{-- Sub Header (Breadcrumbs and action buttons)--}}
            @include('partials.admin.sub_header')
            <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        @yield('content')
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
            @include('partials.admin.footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->

{{-- begin Partials --}}
@include('partials.admin.scrolltop')
@include('partials.admin.modals')
@include('partials.admin.scripts')
@include('partials.admin.toast')
{{-- End Partials --}}

</body>
</html>
