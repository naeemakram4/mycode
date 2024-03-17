<form class="form p-5" method="POST" action="{{ route('admin.client.update', $client->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="firstName" class="required form-label">First Name</label>
            <input id="firstName" class="form-control" type="text" name="first_name" value="{{ old('first_name', $client->user->first_name) }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="lastName" class="required form-label">Last Name</label>
            <input id="lastName" class="form-control" type="text" name="last_name"
                   value="{{ old('last_name', $client->user->last_name) }}"/>
        </div>
        <!--end::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="userName" class="required form-label">Username</label>
            <input id="userName" class="form-control" type="text" name="user_name" value="{{ $client->user->user_name }}"/>
        </div>
    </div>

    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="phone" class="required form-label">Phone</label>
            <input id="phone" class="form-control" type="tel" maxlength="10" name="phone" value="{{ old('phone', $client->user->phone) }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label for="email" class="required form-label">Email</label>
            <input id="email" class="form-control" type="email" name="email"
                   value="{{ old('email', $client->user->email) }}"/>
        </div>
        <!--end::Col-->
    </div>

    <div class="row mb-5">
        <!--begin::Col-->
        <daiv class="col-md-6 fv-row fv-plugins-icon-container">
            <label for="address" class="form-label">Address</label>
            <input id="address" class="form-control" type="text" name="address" value="{{ old('address', $client->address) }}"/>
        </daiv>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2 fv-row fv-plugins-icon-container">
            <label for="city" class="form-label">City</label>
            <input id="city" class="form-control" type="text" name="city"
                   value="{{ old('city', $client->city) }}"/>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2 fv-row fv-plugins-icon-container">
            <label for="state" class="form-label">State</label>
            <input id="state" class="form-control" type="text" name="state"
                   value="{{ old('state', $client->state) }}"/>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2 fv-row fv-plugins-icon-container">
            <label for="postalCode" class="form-label">Postal Code</label>
            <input id="postalCode" class="form-control" type="text" name="postal_code"
                   value="{{ old('postal_code', $client->postal_code) }}"/>
        </div>
        <!--end::Col-->
    </div>

    <div class="mb-10">
        <label for="password" class="required form-label">New Password</label>
        <input id="password" class="form-control" type="password" name="new_password"/>
    </div>

    <div class="separator separator-content my-15">Business Details</div>

    <div class="row mb-5">
        <div class="col-md-1 fv-row">
            <div class="symbol symbol-75px w-75px bg-light">
                <img src="{{ asset('storage/'. $client->company_logo ) }}" alt="image" class="p-3">
            </div>
        </div>
        <div class="col-md-5 fv-row">
            <label for="company" class="required form-label">New Company Logo</label>
            <input id="company_logo" class="form-control" type="file" name="company_logo" />
        </div>
        <div class="col-md-6 fv-row">
            <label for="company" class="required form-label">Company</label>
            <input id="company" class="form-control" type="text" name="company_name"
                   value="{{ old('company_name', $client->company_name) }}"/>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 fv-row">
            <label for="website" class="form-label">Website</label>
            <input id="website" class="form-control" type="text" name="website"
                   value="{{ old('website', $client->website) }}"/>
        </div>
    </div>

    <div class="row mb-5">
        <div id="service">
            <!--begin::Form group-->
            <div class="form-group">
                <div data-repeater-list="client_services">
                    @foreach($client->services as $value)
                        <div data-repeater-item>
                            <div class="form-group row">
                                <input type="hidden" name="client_service_table_id" value="{{ $value->pivot->id }}">
                                <div class="col-md-6">
                                    <label for="service_id" class="required form-label">Select Services</label>
                                    <select name="service_id" id="service_id" class="form-select" data-control="select2" data-placeholder="Select Services">
                                        <option value=""></option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}" {{ $service->id == $value->pivot->service_id ? 'selected' : '' }}>{{ $service->label }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="startDate" class="required form-label">Start Date</label>
                                    <input id="startDate" class="form-control" type="date" name="start_date"
                                           value="{{ $value->pivot->start_date }}"/>
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
                    @endforeach
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
        <input class="form-check-input" name="status" {{ $client->user->status == \App\Models\User::STATUS_ACTIVE ? "checked" : '' }} type="checkbox" />
        <label class="form-check-label" for="form_checkbox">
            Active
        </label>
    </div>

    <div class="text-end">
        <button id="submit-button" class="btn btn-primary">
            {{ $pageTitle }}
        </button>
    </div>
</form>

@section('pageScriptFiles')
    <script src="{{ asset('js/form_repeater.js') }}"></script>
@endsection

@push('pageInnerScript')
    <script>
        $('#service').repeater({
            initEmpty: false,
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
