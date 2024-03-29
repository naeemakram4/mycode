@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    @include('admin.file-manager.components.project-files.header')
    @include('admin.file-manager.components.project-files.files')
@endsection
