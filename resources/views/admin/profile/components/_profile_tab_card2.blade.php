<div class="card pt-4 mb-6 mb-xl-9">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title flex-column">
            <h2 class="mb-1">Update Password</h2>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pb-5">
        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('admin.change.password') }}" method="POST">
            @csrf
            <!--begin::Input group=-->
            <div class="fv-row mb-10 fv-plugins-icon-container">
                <label class="required form-label fw-bolder fs-6 mb-2">Current Password</label>
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off">
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
            <!--end::Input group=-->
            <!--begin::Input group-->
            <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                <!--begin::Wrapper-->
                <div class="mb-1">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder required fs-6 mb-2">New Password</label>
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off">
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    <!--end::Input wrapper-->
                    <!--begin::Meter-->
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                    <!--end::Meter-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Hint-->
                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                <!--end::Hint-->
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
            <!--end::Input group=-->
            <!--begin::Input group=-->
            <div class="fv-row mb-10 fv-plugins-icon-container">
                <label class="form-label required fw-bolder fs-6 mb-2">Confirm New Password</label>
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_confirm_password" autocomplete="off">
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
            <!--end::Input group=-->

                <!--begin:Separator-->
                <div class="separator separator-dashed my-5"></div>
                <!--end:Separator-->

                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9 border-0">
                    <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
                <!--end::Actions-->
            <div></div>
        </form>
    </div>
    <!--end::Card body-->
</div>
