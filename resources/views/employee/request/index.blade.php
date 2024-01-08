@extends('layouts.employee')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('employee.request.components.filter')
            @include('employee.request.components.table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection

@section('pageInnerModals')
    @include('employee.request.components.create_request_model')
    @include('employee.request.components.view-request-drawer')
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endsection
