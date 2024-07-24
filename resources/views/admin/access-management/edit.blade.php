@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('admin.access-management.components.edit-form')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection

@push('pageInnerScript')
    <script>
        let permissions = $("#permissions").select2({
            closeOnSelect: false,
        });

        let options = $('#permissions option');
        let values = $.map(options ,function(option) {
            return option.value;
        });

        $(".select-all-permissions").on("click", function () {
            permissions.val(values).trigger("change");
        });

        $(".deselect-all-permissions").on("click", function () {
            permissions.val(null).trigger("change");
        });
    </script>
@endpush
