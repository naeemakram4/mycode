<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
    <!--begin::Thumbnail settings-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Thumbnail</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('../assets/media/svg/files/blank-image.svg')">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Add Product Image">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                    <input type="hidden" name="avatar_remove">
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove Image">
														<i class="bi bi-x fs-2"></i>
													</span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->
            <!--begin::Description-->
            <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
            <!--end::Description-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Thumbnail settings-->
    <!--begin::Status-->
    <div class="card card-flush py-4" data-select2-id="select2-data-140-w1a6">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Status</h2>
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <div class="rounded-circle w-15px h-15px bg-primary bg-danger" id="kt_ecommerce_add_product_status"></div>
            </div>
            <!--begin::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0" data-select2-id="select2-data-139-4aco">
            <!--begin::Select2-->
            <select name="status" class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select status" data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1" aria-hidden="true">
                <option value="1" selected="selected" data-select2-id="select2-data-11-et8g">Active</option>
                <option value="0" data-select2-id="select2-data-135-tfdz">Inactive</option>
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Status-->
</div>
<!--end::Aside column-->
