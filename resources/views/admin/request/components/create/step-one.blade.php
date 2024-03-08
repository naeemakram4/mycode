<!--begin::Step 1-->
<div class="current" data-kt-stepper-element="content">
    @csrf
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-15">
            <!--begin::Title-->
            <h2 class="fw-bolder d-flex align-items-center text-dark">Choose Request Type
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Billing is issued based on your selected account type" aria-label="Billing is issued based on your selected account type"></i></h2>
            <!--end::Title-->
            <!--begin::Notice-->
            <div class="text-muted fw-bold fs-6">If you need more info, please check out
                <a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
            <!--end::Notice-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
        <div class="fv-row fv-plugins-icon-container">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label required">Request Type</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="request_type" class="form-select form-select-lg form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Select Request Type" data-allow-clear="true" data-hide-search="true" tabindex="-1" aria-hidden="true">
                        <option></option>
                        @foreach($requestTypes as $requestType)
                            <option value="{{ $requestType->id }}"> {{ $requestType->label }}</option>
                        @endforeach
                    </select>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label required">Select Client</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="request_client" class="form-select form-select-lg form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Select Client" data-allow-clear="true" data-hide-search="false" tabindex="-1" aria-hidden="true">
                        <option></option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->user->getFullName() }}</option>
                        @endforeach
                    </select>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="form-label required">Select Employee</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="assignee_employee" class="form-select form-select-lg form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Select Employee" data-allow-clear="true" data-hide-search="false" tabindex="-1" aria-hidden="true">
                        <option></option>
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->user->getFullName() }}</option>
                        @endforeach
                    </select>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 1-->
