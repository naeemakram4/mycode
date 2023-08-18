@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('pageInnerStyle')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-column flex-xl-row">
        @include('admin.company-hq.team.components.view.aside')
        @include('admin.company-hq.team.components.view.content')
    </div>
@endsection

@section('pageInnerModals')
    @include('admin.company-hq.team.components.edit-modal')
@endsection

@section('pageScriptFiles')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endsection

@push('pageInnerScript')
    <script>
        // Edit record modal window script
        $('body').on('click', '#editEmployee', function (event) {
            event.preventDefault();

            let id = $(this).data('id');

            $.get('/admin/edit-team/' + id, function (data) {
                $('#editEmployeeForm').prop('action', '/admin/update_team/'+data.id);

                $('input[name="name"]').val(data.name);
                $('input[name="email"]').val(data.email);
                $('input[name="phone"]').val(data.phone);
                $('select[name="department"]').val(data.department_id)
                $('select[name="designation"]').val(data.designation_id)
                $('textarea[name="remarks"]').val(data.remarks);

                if (data.status === 1){
                    $('input[name="status"]').prop("checked", true)
                } else {
                    $('input[name="status"]').prop("checked", false)
                }
                $('#editEmployeeModal').modal('show');
            })
        });
    </script>
@endpush
