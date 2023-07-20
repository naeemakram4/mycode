@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="d-flex flex-column flex-lg-row">
        @include('admin.profile.components.sidebar')

        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            @include('admin.profile.components.panel_nav')
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                @include('admin.profile.components.profile_tab')
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
@endsection
