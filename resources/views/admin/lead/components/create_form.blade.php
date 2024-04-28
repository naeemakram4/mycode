<!--begin::Form-->
<form method="POST" action="{{ route('admin.lead-management.store') }}" class="form"
      enctype="multipart/form-data">
    @csrf
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-8">
            <label for="service" class="required form-label">Lead Service</label>
            <select name="services[]" id="service" multiple class="form-select" data-control="select2"
                    data-placeholder="Lead Service">
                <option value=""></option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->label }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label class="required form-label">Lead Value</label>
            <input type="text" name="lead_value" class="form-control"
                   value="{{old('lead_value')}}">
        </div>
    </div>

    <div class="separator separator-dashed border-secondary my-10 mx-20"></div>

    <div class="fv-row mb-7 fv-plugins-icon-container">
        <div class="col-md-4">
            <label for="clients" class="required form-label">Lead Type</label>
            <select name="lead_type" class="form-select" data-control="select2"
                    data-placeholder="Lead Type">
                <option value=""></option>
                @foreach($leadManagementTypes as $leadManagementType)
                    <option value="{{ $leadManagementType->id }}">{{ $leadManagementType->label }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-8">
            <label for="employees" class="form-label">Select Employees</label>
            <select name="employees[]" class="form-select" multiple data-control="select2"
                    data-placeholder="Select Employees">
                <option value=""></option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->user->getFullName() }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="separator separator-dashed border-secondary my-10 mx-20"></div>

    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label">Company</label>
            <input type="text" name="company" class="form-control"
                   value="{{old('company')}}">
        </div>


    </div>

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-6">
            <label class="form-label">Website</label>
            <input type="text" name="website" class="form-control"
                   value="{{old('website ')}}">
        </div>
    </div>
    <!--end::Input group-->

    <div class="separator separator-dashed border-secondary my-10 mx-20"></div>

    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-4">
            <label class="form-label">Contact Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" >
        </div>

        <div class="col-md-4">
            <label class="form-label required">Contact Number</label>
            <input type="tel" name="phone" maxlength="10" class="form-control"
                   value="{{old('phone')}}">
        </div>
        <div class="col-md-4">
            <label class="form-label">Contact Position</label>
            <input type="text" name="position" class="form-control"
                   value="{{old('position')}}">
        </div>
    </div>
    <!--end::Input group-->

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-4">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"
                   value="{{old('email')}}">
        </div>
    </div>

    <!--begin::Input group-->
    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-4">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{old('address')}}" >
        </div>

        <div class="col-md-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control"
                   value="{{old('city')}}">
        </div>
        <div class="col-md-3">
            <label class="form-label">State</label>
            <input type="text" name="state" class="form-control"
                   value="{{old('state')}}">
        </div>

        <div class="col-md-2">
            <label class="form-label">Postal Code</label>
            <input type="text" name="postal_code" class="form-control"
                   value="{{old('postal_code')}}">
        </div>
    </div>
    <!--end::Input group-->

    <div class="row mb-7 fv-plugins-icon-container">
        <div class="col-md-4">
            <label for="status" class="form-label required">Status</label>
            <select name="status" id="status" class="form-select" data-control="select2"
                    data-placeholder="Status">
                <option value=""></option>
                @foreach($leadStatus as $status)
                    <option value="{{ $status }}">{{ ucfirst(str_replace('_', ' ', $status)) }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <!--begin::Input group-->
    <div class="fv-row mb-7 fv-plugins-icon-container">
        <label class="form-label">Note</label>
        <textarea name="note" class="form-control  form-control-solid" rows="2"></textarea>
    </div>
    <!--end::Input group-->

    <div class="separator separator-dashed border-secondary my-10 mx-20"></div>

        <div class="mb-10">
            <input class="form-check-input" name="is_seo_audit" type="checkbox"/>
            <label class="form-check-label" for="form_checkbox">
                Request SEO Audit
            </label>
        </div>

    <div class="row mb-7" id="isSeoAuditEnabled">
        <div class="col-md-4">
            <label class="form-label" for="form_checkbox">SEO Audit Date</label>
            <input class="form-control" name="seo_audit_date" type="date"/>
        </div>

        <div class="col-md-4">
            <label class="form-label" for="form_checkbox">SEO Audit Status</label>
            <select name="seo_audit_status" id="seo_audit_status" class="form-select" data-control="select2"
                    data-placeholder="Status">
                <option value=""></option>
                @foreach($seoAuditStatus as $seoStatus)
                    <option value="{{ $seoStatus }}">{{ ucfirst(str_replace('_', ' ', $seoStatus)) }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!--begin::Actions-->
    <div class="text-end">
        <button type="submit" class="btn btn-primary">Create Lead</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->

@push('pageInnerScript')
    <script type="text/javascript">
        $(function () {
            $('#isSeoAuditEnabled').hide();

            // Right drawer content updating
            $('body').on('change', 'input[name="is_seo_audit"]', function () {
                $('#isSeoAuditEnabled').toggle();
            });
        });
    </script>
@endpush
