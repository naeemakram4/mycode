@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    @include('admin.file-manager.components.request-files.header')
    @include('admin.file-manager.components.request-files.files')
@endsection
