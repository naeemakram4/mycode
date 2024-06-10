<form class="form p-5" method="POST" action="{{ route('admin.client.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="firstName" class="form-label">First Name</label>
            <input id="firstName" class="form-control" type="text" name="first_name" value="{{ old('first_name') }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="lastName" class="form-label">Last Name</label>
            <input id="lastName" class="form-control" type="text" name="last_name"
                   value="{{ old('last_name') }}"/>
        </div>
        <!--end::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="userName" class="required form-label">Username</label>
            <input id="userName" required class="form-control" type="text" name="user_name"/>
        </div>
    </div>

    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="phone" class="form-label">Phone</label>
            <input id="phone" class="form-control" type="tel" maxlength="10" name="phone" value="{{ old('phone') }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="email" class="form-label">Email</label>
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
        <input id="password" required class="form-control" type="password" name="password"/>
    </div>

    <div class="separator separator-content my-15">Business Details</div>

    <div class="row mb-5">
        <div class="col-md-6 fv-row">
            <label for="company" class="form-label">Company Logo</label>
            <input id="company_logo" class="form-control" type="file" name="company_logo" />
        </div>
        <div class="col-md-6 fv-row">
            <label for="company" class="required form-label">Company Name</label>
            <input id="company" required class="form-control" type="text" name="company_name"
                   value="{{ old('company_name') }}"/>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 fv-row">
            <label for="website" class="form-label">Website</label>
            <input id="website" class="form-control" type="text" name="website"
                   value="{{ old('website') }}"/>
        </div>
    </div>

    <div class="row mb-5">
        <div id="service">
            <!--begin::Form group-->
            <div class="form-group">
                <div data-repeater-list="client_services">
                    <div data-repeater-item>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="service_id" class="required form-label">Select Services</label>
                                <select name="service_id" required id="service" class="form-select" data-control="select2" data-placeholder="Select Services">
                                    <option value=""></option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->label }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="startDate" class="required form-label">Start Date</label>
                                <input id="startDate" required class="form-control" type="date" name="start_date"
                                       value="{{ old('start_date') }}"/>
                            </div>

                            <div class="col-md-3">
                                <label for="endDate" class="form-label required">End Date</label>
                                <input id="endDate" required class="form-control" type="date" name="end_date"
                                       value="{{ old('end_date') }}"/>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="col-md-3">
                            <a href="javascript:void(0);" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8">
                                <i class="la la-trash-o"></i>Delete
                            </a>
                        </div>
                        <div class="separator separator-dashed border-secondary my-10 mx-20"></div>

                    </div>
                </div>
            </div>
            <!--end::Form group-->
            <!--begin::Form group-->
            <div class="form-group mt-5">
                <a href="javascript:void(0);" data-repeater-create class="btn btn-light-primary">
                    <i class="la la-plus"></i>
                    Add Service
                </a>
            </div>
            <!--end::Form group-->
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

@section('pageScriptFiles')
    <script src="{{ asset('js/form_repeater.js') }}"></script>
@endsection

@push('pageInnerScript')
    <script>
        $('#service').repeater({
            initEmpty: true,
            show: function () {
                $('.form-select').select2({placeholder: 'Select an option'})
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this Service?')) {
                    $(this).slideUp(deleteElement);
                }
            },

            isFirstItemUndeletable: false
        });
    </script>
@endpush
