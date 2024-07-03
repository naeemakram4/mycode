<!--begin::Form-->
<form method="POST" class="form" action="{{ route('admin.employee.update', $employee->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-1 fv-row">
            <div class="symbol symbol-75px w-75px bg-light">
                @if($employee->image)
                <img src="{{ asset('storage/'. $employee->image ) }}" alt="No image" class="p-3">
                @else
                    <img src="{{ asset('/assets/media/avatars/blank.png') }}" alt="No image">
                @endif
            </div>
        </div>
        <div class="col-md-6 fv-row">
            <label for="employee_image" class="form-label">New Image</label>
            <input id="employee_image" class="form-control" type="file" name="employee_image" />
        </div>
    </div>

    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-4">
            <label class="form-label required">First Name</label>
            <input type="text" name="first_name" class="form-control  form-control-solid"
                   value="{{old('first_name', $employee->user->first_name)}}">
        </div>
        <div class="col-md-4">
            <label class="form-label required">Last Name</label>
            <input type="text" name="last_name" class="form-control  form-control-solid"
                   value="{{old('last_name', $employee->user->last_name)}}">
        </div>

        <div class="col-md-4">
            <label class="form-label required">Contact Number</label>
            <input type="tel" name="phone" maxlength="10" class="form-control  form-control-solid" value="{{old('phone', $employee->user->phone)}}">
        </div>
    </div>
    <!--end::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label required">User Name</label>
            <input type="text" name="user_name" class="form-control form-control-solid" value="{{old('user_name', $employee->user->user_name)}}">
        </div>
        <div class="col-md-6">
            <label class="form-label required">Email</label>
            <input type="email" name="email" class="form-control  form-control-solid" value="{{old('email', $employee->user->email)}}">
        </div>
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label class="form-label required">New Password</label>
        <div class="input-group">
            <input type="password" name="new_password" id="new_password" class="form-control form-control-solid">
            <span class="input-group-btn">
                <button type="button" class="btn btn-primary getNewPass" onclick="showPassword()">
                    <span class="bi bi-eye"></span>
                </button>
            </span>
        </div>
    </div>
    <!--end::Input group-->

    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label for="clients" class="required form-label">Assign Clients</label>
        <select name="clients[]" id="clients" class="form-select form-select-solid" multiple data-control="select2"
                data-placeholder="Assign Clients">
            <option value=""></option>
            @foreach($clients as $client)
                <option value="{{ $client->id }}"
                    @if($employee->hasClient($client->id)) selected @endif>
                    {{ $client->company_name }}
                </option>
            @endforeach
        </select>
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label class="form-label required">Remarks</label>
        <textarea name="remarks" class="form-control  form-control-solid" rows="1">{{ $employee->remarks }}</textarea>
    </div>
    <!--end::Input group-->

    <div class="mb-10">
        <input class="form-check-input" name="status" type="checkbox" {{ $employee->user->status == \App\Models\User::STATUS_ACTIVE ? 'checked' : '' }}/>
        <label class="form-check-label" for="form_checkbox">Active</label>
    </div>

    <!--begin::Actions-->
    <div class="text-end">
        <button type="submit" id="updateProductBtn" class="btn btn-primary">Update</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
