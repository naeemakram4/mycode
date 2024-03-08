@extends('layouts.app')
@section('pageTitle', $pageTitle)

@section('content')

    <div class="card mb-6 mb-xl-9">
        <div class="card-body pt-9 pb-0">
            @include('customer.project.components.view.header')
            <div class="separator"></div>
            @include('customer.project.components.view.navigation')
        </div>
    </div>

    @if(request()->url() == route('customer.project.show', $project->id))
        @include('customer.project.components.view.overview.index')
    @elseif(request()->url() == route('customer.project.task', $project->id))
        @include('customer.project.components.view.target.index')
    @endif
@endsection

@section('pageInnerModals')
    @include('customer.project.components.view.target.create-target-model')
@endsection
