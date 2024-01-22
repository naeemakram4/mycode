@extends('layouts.app')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('customer.request.components.filter')
            @include('customer.request.components.table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection

@section('pageInnerModals')
    @include('customer.request.components.view-request-drawer')
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endsection
