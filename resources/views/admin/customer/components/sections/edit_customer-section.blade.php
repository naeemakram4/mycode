<!--begin::Wrapper-->
<div class="w-100">
    <div class="d-flex justify-content-between pb-5 pb-lg-6">
        <!--begin::Title-->
        <h2 class="fw-bolder text-dark">Customer Details</h2>
        <div class="w-25">
            <!--begin::Label-->
            <label class="form-label required">Customer Platform</label>
            <!--end::Label-->
            <!--begin::Input-->
            <select class="form-select form-select-solid select2-country" name="origin_id">
                <option selected="" value="0">Select Platform</option>
                @foreach($platforms as $platform)
                    <option value="{{ $platform->id }}" {{ ($customer->origin_id == $platform->id) ? 'selected' : '' }} > {{ $platform->name }} </option>
                @endforeach
            </select>
            <!--end::Input-->
        </div>
        <!--end::Title-->
    </div>
    <!--begin::Input group-->
    <div class="row mb-10">
        <div class="col-md-4">
            <!--begin::Label-->
            <label class="form-label required">First Name</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="first_name" class="form-control form-control-lg form-control-solid" value="{{old('first_name', $customer->first_name)}}">
            <!--end::Input-->
        </div>
        <div class="col-md-4">
            <!--begin::Label-->
            <label class="form-label required">Last Name</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="last_name" class="form-control form-control-lg form-control-solid" value="{{old('last_name', $customer->last_name)}}">
            <!--end::Input-->
        </div>
        <div class="col-md-4">
            <!--begin::Label-->
            <label class="form-label required">Email</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="email" name="email" class="form-control form-control-lg form-control-solid" value="{{old('email', $customer->email)}}">
            <!--end::Input-->
        </div>
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-10 fv-plugins-icon-container">
        <div class="col-md-4">
            <!--begin::Label-->
            <label class="form-label required">Phone</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="phone" class="form-control form-control-lg form-control-solid" value="{{old('phone', $customer->phone)}}">
            <!--end::Input-->
        </div>
        <div class="col-md-8">
            <!--begin::Label-->
            <label class="form-label required">Address</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="address" class="form-control form-control-lg form-control-solid" value="{{old('address', $customer->address)}}">
            <!--end::Input-->
        </div>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-10 fv-plugins-icon-container">
        <div class="col-md-3">
            <!--begin::Label-->
            <label class="form-label required">City</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="city" class="form-control form-control-lg form-control-solid" value="{{old('city', $customer->city)}}">
            <!--end::Input-->
        </div>
        <div class="col-md-3">
            <!--begin::Label-->
            <label class="form-label required">State</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="state" class="form-control form-control-lg form-control-solid" value="{{old('state', $customer->state)}}">
            <!--end::Input-->
        </div>
        <div class="col-md-3">
            <!--begin::Label-->
            <label class="form-label required">Country</label>
            <!--end::Label-->
            <!--begin::Input-->
            <select id="Country" class="form-select form-select-solid select2-country" name="country">
                <option selected="" value="0">Select Country</option>
                <option value="usa" {{ ($customer->country == 'usa' ? 'selected' : '') }}>USA</option>
            </select>
            <!--end::Input-->
        </div>
        <div class="col-md-3">
            <!--begin::Label-->
            <label class="form-label required">Postal Code</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="postal_code" class="form-control form-control-lg form-control-solid" value="{{old('postal_code', $customer->postal_code)}}">
            <!--end::Input-->
        </div>
    </div>
    <!--end::Input group-->
</div>
<!--end::Wrapper-->
