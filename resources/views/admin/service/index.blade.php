@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('admin.service.components.table')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection

@section('pageInnerModals')
    @include('admin.service.components.create_service_model')
    @include('admin.service.components.edit_service_model')
@endsection

@push('pageInnerScript')
    <script>
        // Edit record modal window script
        $('body').on('click', '#editService', function (event) {
            event.preventDefault();

            let id = $(this).data('id');

            $.get('/admin/service/' + id + '/edit', function (data) {
                $('#serviceEditForm').prop('action', '/admin/service/'+data.id);

                $('input[name="label"]').val(data.label);
                $('textarea[name="description"]').val(data.description);
                $('#editServiceModel').modal('show');
            })
        });
    </script>
@endpush
