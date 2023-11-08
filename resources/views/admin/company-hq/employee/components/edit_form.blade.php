<!--begin::Form-->
<form method="POST" class="form" action="{{ route('admin.employee.update', $employee->id) }}">
    @csrf
    @method('PUT')

    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label required">Name</label>
            <input type="text" name="edit_name" class="form-control  form-control-solid" value="{{old('name', $employee->name)}}">
        </div>

        <div class="col-md-6">
            <label class="form-label required">Contact Number</label>
            <input type="tel" name="edit_phone" maxlength="10" class="form-control  form-control-solid" value="{{old('phone', $employee->phone)}}">
        </div>
    </div>
    <!--end::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label required">User Name</label>
            <input type="text" name="edit_user_name" class="form-control form-control-solid" value="{{old('user_name', $employee->user->user_name)}}">
        </div>
        <div class="col-md-6">
            <label class="form-label required">Email</label>
            <input type="email" name="edit_email" class="form-control  form-control-solid" value="{{old('email', $employee->email)}}">
        </div>
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label class="form-label required">New Password</label>
        <div class="input-group">
            <input type="password" name="edit_password" id="password" class="form-control form-control-solid">
            <span class="input-group-btn">
                <button type="button" class="btn btn-primary getNewPass" onclick="showPassword()">
                    <span class="bi bi-eye"></span>
                </button>
            </span>
        </div>
    </div>
    <!--end::Input group-->

    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label for="edit_clients" class="required form-label">Assign Clients</label>
        <select name="edit_clients[]" id="edit_clients" class="form-select form-select-solid" multiple data-control="select2"
                data-placeholder="Assign Clients">
            <option value=""></option>
            @foreach($clients as $client)
                <option value="{{ $client->id }}"
                    @if($employee->hasClient($client->id)) selected @endif>
                    {{ $client->user->first_name .' '. $client->user->last_name }}
                </option>
            @endforeach
        </select>
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label class="form-label required">Remarks</label>
        <textarea name="edit_remarks" class="form-control  form-control-solid" rows="1">
            {{ $employee->remarks }}
        </textarea>
    </div>
    <!--end::Input group-->

    <div class="mb-10">
        <input class="form-check-input" name="edit_status" type="checkbox" {{ $employee->status == 1 ? 'checked' : '' }}/>
        <label class="form-check-label" for="form_checkbox">Active</label>
    </div>

    <!--begin::Actions-->
    <div class="text-end">
        <button type="submit" id="updateProductBtn" class="btn btn-primary">Update</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
