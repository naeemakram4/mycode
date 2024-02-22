@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('admin.company-hq.employee.components.edit_form')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection

@push('pageInnerScript')
    <script>
        function showPassword() {
            var x = document.getElementById("new_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endpush
