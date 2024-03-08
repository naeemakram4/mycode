@extends('layouts.employee')
@section('pageTitle', $pageTitle)

@section('content')

    <div class="card mb-6 mb-xl-9">
        <div class="card-body pt-9 pb-0">
            @include('employee.project.components.view.header')
            <div class="separator"></div>
            @include('employee.project.components.view.navigation')
        </div>
    </div>

    @if(request()->url() == route('employee.project.show', $project->id))
        @include('employee.project.components.view.overview.index')
    @elseif(request()->url() == route('employee.project.task', $project->id))
        @include('employee.project.components.view.target.index')
    @endif
@endsection

@section('pageInnerModals')
    @include('employee.project.components.view.target.create-target-model')
@endsection
