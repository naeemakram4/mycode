@extends('layouts.employee')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper" data-kt-stepper="true">
        @include('employee.request.components.create.aside')
        <!--begin::Content-->
        <div class="card d-flex flex-row-fluid flex-center">
            <!--begin::Form-->
            <form method="POST" action="{{ route('employee.request.store') }}" enctype=multipart/form-data class="card-body py-20 w-100 w-xl-700px px-9 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">
                @include('employee.request.components.create.step-one')
                @include('employee.request.components.create.step-two')
                @include('employee.request.components.create.step-three')
                @include('employee.request.components.create.step-four')
                @include('employee.request.components.create.action')
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/employee-create-request-form.js') }}"></script>
@endsection