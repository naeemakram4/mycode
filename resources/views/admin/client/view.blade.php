@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="d-flex flex-column flex-xl-row">
        @include('admin.client.components.view.aside')
        @include('admin.client.components.view.content')
    </div>
@endsection
