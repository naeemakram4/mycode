<div class="col-md-6">
    <!--begin::Wrapper-->
    <div class="w-100">
        <div class="pb-5 pb-lg-6">
            <!--begin::Title-->
            <h2 class="fw-bolder text-dark">Billing Details</h2>
            <!--end::Title-->
        </div>

        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="form-label required">Address Line 1</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="billing_address_line1" id="billingAddressLine1" class="form-control form-control-lg form-control-solid" value="{{old('billing_address_line1')}}">
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="form-label">Address Line 2</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="billing_address_line2" id="billingAddressLine2" class="form-control form-control-lg form-control-solid" value="{{old('billing_address_line2')}}">
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-10 fv-plugins-icon-container">
            <div class="col-md-6">
                <!--begin::Label-->
                <label class="form-label required">City</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="billing_city" id="billingCity" class="form-control form-control-lg form-control-solid" value="{{old('billing_city')}}">
                <!--end::Input-->
            </div>
            <div class="col-md-6">
                <!--begin::Label-->
                <label class="form-label required">State</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" id="billingState" name="billing_state" value="{{old('billing_state')}}" class="form-control form-control-lg form-control-solid">
                <!--end::Input-->
            </div>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-10 fv-plugins-icon-container">
            <div class="col-md-6">
                <!--begin::Label-->
                <label class="form-label required">Country</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select id="billingCountry" class="form-select form-select-solid select2-country" name="billing_country">
                    <option selected="" value="0">Select Country</option>
                    <option value="usa">USA</option>
                </select>
                <!--end::Input-->
            </div>
            <div class="col-md-3">
                <!--begin::Label-->
                <label class="form-label required">Postal Code</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" id="billingPostalCode" name="billing_postal_code" value="{{old('billing_postal_code')}}" class="form-control form-control-lg form-control-solid">
                <!--end::Input-->
            </div>
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
