<div class="col-md-6">
    <!--begin::Wrapper-->
    <div class="w-100">
        <div class="pb-5 pb-lg-6">
            <!--begin::Title-->
            <h2 class="fw-bolder text-dark">Shipping Details</h2>
            <!--end::Title-->
        </div>

        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="form-label required">Address Line 1</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" id="shippingAddressLine1" name="shipping_address_line1" value="{{old('shipping_address_line1')}}" class="form-control form-control-lg form-control-solid">
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="form-label">Address Line 2</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="shipping_address_line2" id="shippingAddressLine2" class="form-control form-control-lg form-control-solid" value="{{old('shipping_address_line2')}}">
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
                <input type="text" name="shipping_city" id="shippingCity" class="form-control form-control-lg form-control-solid" value="{{old('shipping_city')}}">
                <!--end::Input-->
            </div>
            <div class="col-md-6">
                <!--begin::Label-->
                <label class="form-label required">State</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="shipping_state" id="shippingState" class="form-control form-control-lg form-control-solid" value="{{old('shipping_state')}}">
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
                <select id="shipppingCountry" class="form-select form-select-solid select2-country" name="shipping_country">
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
                <input type="text" name="shipping_postal_code" id="shippingPostalCode" class="form-control form-control-lg form-control-solid" value="{{old('shipping_postal_code')}}">
                <!--end::Input-->
            </div>
            <div class="col-md-3">
                <label class="form-label"></label>
                <button type="button" class="btn btn-sm btn-info" id="copyBillingAddress">Same AS Billing</button>
            </div>
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
