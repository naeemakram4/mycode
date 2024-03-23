@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    @include('admin.file-manager.components.files.header')
    @include('admin.file-manager.components.files.table')
@endsection
