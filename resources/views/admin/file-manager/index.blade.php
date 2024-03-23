@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    @include('admin.file-manager.components.index.header')
    @include('admin.file-manager.components.index.table')
@endsection
