@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-column flex-xl-row">
        @include('admin.customer.components.view.aside')
        @include('admin.customer.components.view.content')
    </div>
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endsection
