<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Store Profile</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Form-->
    <form method="POST" action="{{ route('store-setting.update', $account->AccountKey) }}" class="form">
    @csrf
    @method('PUT')
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <input type="text" name="business_name" class="form-control form-control-lg form-control-solid " value="{{ $account->BusinessName ?? '' }}">
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="email" name="business_email" readonly  class="form-control form-control-lg form-control-solid " value="{{ $account->BusinessEmailAddress ?? '' }}">
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">Address</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="business_address" readonly  class="form-control form-control-lg form-control-solid" value="{{ $account->BusinessAddress ?? '' }}">
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">City & State</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-4 fv-row mb-lg-0 mb-4">
                    <input type="text" name="business_city" readonly  class="form-control form-control-lg form-control-solid" value="{{ $account->BusinessCity ?? '' }}">
                </div>
                <div class="col-lg-4 fv-row">
                    <select name="business_state" disabled class="form-select form-select-lg form-select-solid"
                            data-control="select2" data-placeholder="Select Business State" data-allow-clear="true">
                        <option></option>
                        @foreach(\App\Models\State::all() as $state)
                            <option value="{{ $state->name }}" {{ ($account->BusinessState  == $state->name) ? 'selected' : ''}}>{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">Store Phone Number</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="tel" name="business_phone" readonly  class="form-control form-control-lg form-control-solid" maxlength="10" value="{{ $account->BusinessPhoneNumber ?? '' }}">
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold required">Store Zip Code</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="business_zip_code" readonly class="form-control form-control-lg form-control-solid" value="{{ $account->BusinessZipCode ?? '' }}">
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Card body-->
    </form>
    <!--end::Form-->
</div>
<!--end::details View-->
