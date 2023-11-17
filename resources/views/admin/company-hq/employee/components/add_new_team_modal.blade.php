<div class="modal fade" id="addNewTeam" tabindex="-1" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add New {{ $pageTitle }}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                  transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                  fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-3">
                <!--begin::Form-->
                <form method="POST" action="{{ route('admin.employee.store') }}" class="form"
                      enctype="multipart/form-data">
                    @csrf
                    <!--begin::Input group-->
                    <div class="row mb-7 fv-plugins-icon-container">
                        <div class="col-md-6">
                            <label class="form-label required">Name</label>
                            <input type="text" name="name" class="form-control  form-control-solid"
                                   value="{{old('name')}}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label required">Contact Number</label>
                            <input type="text" name="phone" class="form-control  form-control-solid"
                                   value="{{old('phone')}}">
                        </div>
                    </div>
                    <!--end::Input group-->

                    <div class="row mb-7 fv-plugins-icon-container">
                        <div class="col-md-6">
                            <label class="form-label required">User Name</label>
                            <input type="text" name="user_name" class="form-control form-control-solid"
                                   value="{{old('user_name')}}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label required">Email</label>
                            <input type="email" name="email" class="form-control  form-control-solid"
                               value="{{old('email')}}">
                        </div>
                    </div>

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label for="password" class="form-label required">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password"
                                   class="form-control form-control-solid">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary getNewPass" onclick="showPassword()">
                                    <span class="bi bi-eye"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label for="clients" class="required form-label">Assign Clients</label>
                        <select name="clients[]" id="clients" class="form-select" multiple data-control="select2"
                                data-placeholder="Assign Clients">
                            <option value=""></option>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->user->first_name .' '. $client->user->last_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="form-label required">Remarks</label>
                        <textarea name="remarks" class="form-control  form-control-solid" rows="1"></textarea>
                    </div>
                    <!--end::Input group-->

                    <div class="mb-10">
                        <input class="form-check-input" name="status" checked="checked" type="checkbox"/>
                        <label class="form-check-label" for="form_checkbox">
                            Active
                        </label>
                    </div>

                    <!--begin::Actions-->
                    <div class="text-center pt-7">
                        <button type="submit" class="btn btn-primary" data-kt-stepper-action="next">Add
                            New {{ $pageTitle }}
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                      transform="rotate(-180 18 13)" fill="black"></rect>
                                <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

@push('pageInnerScript')
    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endpush
