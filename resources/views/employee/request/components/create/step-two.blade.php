<!--begin::Step 2-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-15">
            <!--begin::Title-->
            <h2 class="fw-bolder text-dark">Request Info</h2>
            <!--end::Title-->
            <!--begin::Notice-->
            <div class="text-muted fw-bold fs-6">If you need more info, please check out
                <a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
            <!--end::Notice-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="form-label required">Request Subject</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input name="request_subject" class="form-control form-control-lg form-control-solid" value="{{ old('request_subject') }}">
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <!--end::Label-->
            <label class="form-label">Request Description</label>
            <!--end::Label-->
            <!--begin::Input-->
            <textarea name="request_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 2-->
