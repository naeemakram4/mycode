@extends('layouts.app')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper" data-kt-stepper="true">
        @include('customer.request.components.create.aside')
        <!--begin::Content-->
        <div class="card d-flex flex-row-fluid flex-center">
            <!--begin::Form-->
            <form method="POST" action="{{ route('customer.request.store') }}" enctype=multipart/form-data class="card-body py-20 w-100 w-xl-700px px-9 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">
                @include('customer.request.components.create.step-one')
                @include('customer.request.components.create.step-two')
                @include('customer.request.components.create.step-three')
                @include('customer.request.components.create.step-four')
                @include('customer.request.components.create.action')
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/customer-create-request-form.js') }}"></script>
@endsection
