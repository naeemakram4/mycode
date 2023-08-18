@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('admin.company-hq.employee.components.table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endsection
