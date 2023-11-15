@extends('layouts.employee')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="row g-7">
        @include('employee.task.components.group')
        @include('employee.task.components.search')
        @include('employee.task.components.content')
    </div>
@endsection


@section('pageInnerModals')
    @include('employee.task.components.add_task_model')
@endsection
