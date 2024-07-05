<!--begin::Form-->
<form method="POST" action="{{ route('admin.employee.store') }}" class="form"
      enctype="multipart/form-data">
    @csrf
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6 fv-row">
            <label for="employee_image" class="form-label">Image</label>
            <input id="employee_image" class="form-control" type="file" name="employee_image" />
        </div>
    </div>

    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-4">
            <label class="form-label required">First Name</label>
            <input type="text" name="first_name" class="form-control  form-control-solid"
                   value="{{old('first_name')}}">
        </div>
        <div class="col-md-4">
            <label class="form-label required">Last Name</label>
            <input type="text" name="last_name" class="form-control  form-control-solid"
                   value="{{old('last_name')}}">
        </div>

        <div class="col-md-4">
            <label class="form-label required">Contact Number</label>
            <input type="tel" name="phone" maxlength="10" class="form-control  form-control-solid"
                   value="{{old('phone')}}">
        </div>
    </div>
    <!--end::Input group-->

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label required">User Name</label>
            <input type="text" name="user_name" class="form-control form-control-solid"
                   value="{{old('user_name')}}">
        </div>

        <div class="col-md-6">
            <label class="form-label required">Email</label>
            <input type="email" name="email" class="form-control  form-control-solid"
                   value="{{old('email')}}">
        </div>
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label for="password" class="form-label required">Password</label>
        <div class="input-group">
            <input type="password" name="password" id="password"
                   class="form-control form-control-solid">
            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary getNewPass" onclick="showPassword()">
                                    <span class="bi bi-eye"></span>
                                </button>
                            </span>
        </div>
    </div>
    <!--end::Input group-->

    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label for="clients" class="form-label">Assign Clients</label>
        <select name="clients[]" id="clients" class="form-select" multiple data-control="select2"
                data-placeholder="Assign Clients">
            <option value=""></option>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->company_name }}</option>
            @endforeach
        </select>
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label class="form-label">Remarks</label>
        <textarea name="remarks" class="form-control  form-control-solid" rows="1"></textarea>
    </div>
    <!--end::Input group-->

    <div class="mb-10">
        <input class="form-check-input" name="status" checked="checked" type="checkbox"/>
        <label class="form-check-label" for="form_checkbox">
            Active
        </label>
    </div>

    <!--begin::Actions-->
    <div class="text-end">
        <button type="submit" class="btn btn-primary" >{{ $pageTitle }}</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
