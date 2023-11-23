@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')

    <div class="card mb-6 mb-xl-9">
        <div class="card-body pt-9 pb-0">
            @include('admin.project.components.view.header')
            <div class="separator"></div>
            @include('admin.project.components.view.navigation')
        </div>
    </div>

    @if(request()->url() == route('admin.project.show', $project->id))
        @include('admin.project.components.view.overview.index')
    @elseif(request()->url() == route('admin.project.target', $project->id))
        @include('admin.project.components.view.target.index')
    @endif
@endsection

@section('pageInnerModals')
    @include('admin.project.components.view.target.create-target-model')
@endsection
