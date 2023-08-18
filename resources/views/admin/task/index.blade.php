@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="row g-7">
        @include('admin.task.components.group')
        @include('admin.task.components.search')
        @include('admin.task.components.content')
    </div>
@endsection


@section('pageInnerModals')
    @include('admin.task.components.add_task_model')
@endsection
