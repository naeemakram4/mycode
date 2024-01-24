<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ $pageTitle }}</h1>
            @include('partials.employee.components.sub_header.breadcrumbs')
        </div>
        <!--end::Page title-->
        <div class="d-flex">
            @include('partials.employee.components.sub_header.date-range-filter')
            @include('partials.employee.components.sub_header.action_btn')
        </div>
    </div>
</div>

