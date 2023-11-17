<form class="form p-5" method="POST" action="{{ route('admin.client.update', $client->id) }}">
    @csrf
    @method('PUT')
    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="firstName" class="required form-label">First Name</label>
            <input id="firstName" class="form-control" type="text" name="first_name" value="{{ old('first_name') }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="lastName" class="required form-label">Last Name</label>
            <input id="lastName" class="form-control" type="text" name="last_name"
                   value="{{ old('last_name') }}"/>
        </div>
        <!--end::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="userName" class="required form-label">Username</label>
            <input id="userName" class="form-control" type="text" name="user_name"/>
        </div>
    </div>

    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="phone" class="required form-label">Phone</label>
            <input id="phone" class="form-control" type="tel" maxlength="10" name="phone" value="{{ old('phone') }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="email" class="required form-label">Email</label>
            <input id="email" class="form-control" type="email" name="email"
                   value="{{ old('email') }}"/>
        </div>
        <!--end::Col-->
    </div>

    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-6 fv-row fv-plugins-icon-container">
            <label for="address" class="form-label">Address</label>
            <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2 fv-row fv-plugins-icon-container">
            <label for="city" class="form-label">City</label>
            <input id="city" class="form-control" type="text" name="city"
                   value="{{ old('city') }}"/>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2 fv-row fv-plugins-icon-container">
            <label for="state" class="form-label">State</label>
            <input id="state" class="form-control" type="text" name="state"
                   value="{{ old('state') }}"/>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2 fv-row fv-plugins-icon-container">
            <label for="postalCode" class="form-label">Postal Code</label>
            <input id="postalCode" class="form-control" type="text" name="postal_code"
                   value="{{ old('postal_code') }}"/>
        </div>
        <!--end::Col-->
    </div>

    <div class="mb-10">
        <label for="password" class="required form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password"/>
    </div>

    <div class="separator separator-content my-15">Business Details</div>

    <div class="row mb-5">
        <div class="col-md-6 fv-row">
            <label for="company" class="required form-label">Company</label>
            <input id="company" class="form-control" type="text" name="company_name"
                   value="{{ old('company_name') }}"/>
        </div>

        <div class="col-md-6 fv-row">
            <label for="website" class="form-label">Website</label>
            <input id="website" class="form-control" type="text" name="website"
                   value="{{ old('website') }}"/>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 fv-row">
            <label for="service" class="required form-label">Select Services</label>
            <select name="services[]" id="service" class="form-select" multiple data-control="select2" data-placeholder="Select Services">
                <option value=""></option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->label }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 fv-row">
            <label for="startDate" class="required form-label">Start Date</label>
            <input id="startDate" class="form-control" type="date" name="start_date"
                   value="{{ old('start_date') }}"/>
        </div>
    </div>

    <div class="mb-10">
        <input class="form-check-input" name="status" checked="checked" type="checkbox" />
        <label class="form-check-label" for="form_checkbox">
            Active
        </label>
    </div>


    <button id="submit-button" class="btn btn-primary">
        Create Client
    </button>
</form>
