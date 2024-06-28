@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                @include('admin.project.components.view.task.comments_aside')
                @include('admin.project.components.view.task.comments_content')
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Container-->
    </div>
@endsection
