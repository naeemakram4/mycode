<!--begin::Form-->
<form method="POST" action="{{ route('admin.project.store') }}" class="form"
      enctype="multipart/form-data">
    @csrf
    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label required">Project Name</label>
            <input type="text" required name="project_name" class="form-control form-control-solid"
                   value="{{old('project_name')}}">
        </div>
        {{-- TODO: Remove this part after some time. We don't need project logo it will be replaced by client logo--}}
{{--        <div class="col-md-4">--}}
{{--            <label class="form-label">Project Logo</label>--}}
{{--            <input type="file" name="project_logo" class="form-control form-control-solid"--}}
{{--                   value="{{old('project_logo')}}">--}}
{{--        </div>--}}
    </div>
    <!--end::Input group-->

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" cols="2"></textarea>
        </div>
    </div>

    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control  form-control-solid"
                   value="{{old('start_date')}}">
        </div>
        <div class="col-md-6">
            <label class="form-label">Due Date</label>
            <input type="date" name="due_date" class="form-control  form-control-solid"
                   value="{{old('due_date')}}">
        </div>
    </div>
    <!--end::Input group-->

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label for="clients" class="required form-label">Select Client</label>
            <select name="client_id" required class="form-select" data-control="select2"
                    data-placeholder="Select Client">
                <option value=""></option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->user->first_name .' '. $client->user->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="employee" class="form-label">Assign Employee</label>
            <select name="employees"  class="form-select" data-control="select2"
                    data-placeholder="Assign Employee">
                <option value=""></option>
            </select>
        </div>
    </div>

    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label for="status" class="required form-label">Select Status</label>
        <select name="status" required class="form-select" data-control="select2"
                data-placeholder="Select Status">
            <option value=""></option>
            @foreach($status as $value)
                <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <!--begin::Actions-->
    <div class="text-end">
        <button type="submit" class="btn btn-primary" >{{ $pageTitle }}</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->

@push('pageInnerScript')
    <script>
        $(document).ready(function () {
            $("select[name=client_id]").change(function () {
                let id = $(this).val();

                $.get('/admin/project/get-employees/' + id, function (data) {
                    let emp = data;

                    $("select[name=employees]").empty();
                    $.each(emp, function (value, emp) {
                        $('<option value="' + emp.id + '"> ' + emp.user.first_name + ' ' + emp.user.last_name + ' </option>').appendTo("select[name=employees]");
                    });
                });
            });

            // Select the sales representative
            {{--let accountManager = {{$store->AccountManagerKey}};--}}
            {{--let salesRepresentative = {{$store->SalesRepresentativeKey}};--}}
            {{--$.get('/admin/store/get-sales-representatives/' + accountManager, function (data) {--}}
            {{--    let sr = data.data;--}}
            {{--    $("select[name=sales_representative]").empty();--}}
            {{--    $.each(sr, function (value, sr) {--}}
            {{--        $('<option value="' + sr.SalesRepresentativeKey + '" ' +--}}
            {{--            (sr.SalesRepresentativeKey === salesRepresentative ? 'selected' : '')--}}
            {{--            +'> ' + sr.user.first_name + ' ' + sr.user.last_name + ' </option>').appendTo("select[name=sales_representative]");--}}
            {{--    });--}}
            {{--});--}}
        });
    </script>
@endpush
