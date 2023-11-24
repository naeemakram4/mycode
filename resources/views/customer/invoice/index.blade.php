@extends('layouts.app')
@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('customer.invoice.components.table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection
