@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Admin Panel {{$pageTitle}}</h2>
                </div>
                <!--begin::Card body-->
                <div class="card-body pt-6">
                    @include('admin.setting.components.form')
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
@endsection
