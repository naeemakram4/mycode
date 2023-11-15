@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
    @include('admin.report.components.edit.nav')

    @if (request()->url() == route('admin.report.project'))
        @include('admin.report.project.index')
    @elseif(request()->url() == route('admin.report.task'))
        @include('admin.report.task.index')
{{--    @elseif(request()->url() == route('store-setting.products'))--}}
{{--        @include('dealer.store-setting.components.edit.products')--}}
{{--    @elseif(request()->url() == route('store-setting.onboarding'))--}}
{{--        @include('dealer.store-setting.components.edit.onboarding')--}}
    @endif

@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endsection
