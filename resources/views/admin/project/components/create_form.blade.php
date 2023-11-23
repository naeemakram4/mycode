<!--begin::Form-->
<form method="POST" action="{{ route('admin.project.store') }}" class="form"
      enctype="multipart/form-data">
    @csrf
    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label required">Project Name</label>
            <input type="text" name="project_name" class="form-control form-control-solid"
                   value="{{old('project_name')}}">
        </div>
        <div class="col-md-4">
            <label class="form-label">Project Logo</label>
            <input type="file" name="project_logo" class="form-control form-control-solid"
                   value="{{old('project_logo')}}">
        </div>
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
            <label class="form-label required">Start Date</label>
            <input type="date" name="start_date" class="form-control  form-control-solid"
                   value="{{old('start_date')}}">
        </div>
        <div class="col-md-6">
            <label class="form-label required">Due Date</label>
            <input type="date" name="due_date" class="form-control  form-control-solid"
                   value="{{old('due_date')}}">
        </div>
    </div>
    <!--end::Input group-->

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label for="clients" class="required form-label">Select Client</label>
            <select name="client_id"  class="form-select" data-control="select2"
                    data-placeholder="Select Client">
                <option value=""></option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->user->first_name .' '. $client->user->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="employee" class="form-label">Assign Employee</label>
            <select name="employees[]"  class="form-select" multiple data-control="select2"
                    data-placeholder="Assign Employee">
                <option value=""></option>
            </select>
        </div>
    </div>

    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label for="status" class="required form-label">Select Status</label>
        <select name="status"  class="form-select" data-control="select2"
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
