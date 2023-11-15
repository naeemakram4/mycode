<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Account Management</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->


    <!--begin::Form-->
    <form method="POST" action="" class="form">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">Account Manager</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <select name="account_manager" disabled class="form-select form-select-lg form-select-solid"
                            data-control="select2" data-placeholder="Select Account Manager" data-allow-clear="true">
                        <option selected> {{ $account->accountManager->user->getFullName() }}</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">Sales Representative</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <select name="sales_representative" disabled class="form-select form-select-lg form-select-solid"
                            data-control="select2" data-placeholder="Select Sales Representative"
                            data-allow-clear="true">
                        <option selected>{{ $account->salesRepresentative->user->getFullName() }}</option>
                    </select>
                </div>
                <!--end::Col-->
            </div>
        </div>
        <!--end::Card body-->
    </form>
    <!--end::Form-->
</div>
<!--end::details View-->
