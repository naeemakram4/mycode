<div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-450px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Edit Department</h2>
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
            <div class="modal-body  mx-3 mx-xl-5 my-3">
                <!--begin::Form-->
                <form method="POST" class="form" id="editDepartmentForm">
                @csrf
                @method('PUT')
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <label class="form-label required">Name</label>
                        <input type="text" name="edit_name" class="form-control form-control-sm form-control form-control-sm-solid" value="">
                    </div>
                    <!--end::Input group-->

                    <div class="mb-10">
                        <input class="form-check-input p-3" name="edit_status" type="checkbox" />
                        <label class="form-check-label" for="form_checkbox">
                            Active
                        </label>
                    </div>

                    <!--begin::Actions-->
                    <div class="text-end">
                        <button type="button" class="btn btn-sm btn-light me-3" data-bs-dismiss="modal" >Cancel</button>
                        <button type="submit" id="updateProductBtn" class="btn btn-sm btn-primary">Update</button>
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
