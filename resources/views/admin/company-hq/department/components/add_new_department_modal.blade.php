<div class="modal fade" id="addNewDepartment" tabindex="-1" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-450px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add New {{$pageTitle}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
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
                <form method="POST" action="{{ route('admin.department.store') }}" class="form">
                    @csrf
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="form-label required">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm  form-control form-control-sm-solid" value="{{old('name')}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <div class="mb-10">
                        <input class="form-check-input" name="status" checked="checked" type="checkbox" />
                        <label class="form-check-label" for="form_checkbox">
                            Active
                        </label>
                    </div>

                    <!--begin::Actions-->
                    <div class="text-center pt-7">
                        <button type="submit" class="btn btn-sm btn-primary" data-kt-stepper-action="next">Add New Department
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
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
