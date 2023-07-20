@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-column gap-7 gap-lg-10">
        @include('admin.order.components.view.tabs')
        @include('admin.order.components.view.summary')
        @include('admin.order.components.view.content')
    </div>
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endsection
