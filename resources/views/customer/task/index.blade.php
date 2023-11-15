@extends('layouts.app')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="row g-7">
        @include('customer.task.components.group')
        @include('customer.task.components.search')
        @include('customer.task.components.content')
    </div>
@endsection


@section('pageInnerModals')
    @include('customer.task.components.add_task_model')
@endsection
