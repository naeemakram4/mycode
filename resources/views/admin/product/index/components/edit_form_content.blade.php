<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <!--begin:::Tabs-->
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Advanced</a>
        </li>
        <!--end:::Tab item-->
    </ul>
    <!--end:::Tabs-->
    <!--begin::Tab content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
            <div class="d-flex flex-column gap-7 gap-lg-10">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>General</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Product Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control mb-2" placeholder="Product name" value="{{ old('name', $product->name) }}">
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Color</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="color" class="form-control mb-2" placeholder="Color" value="{{ old('color', $product->color) }}">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->
            </div>
        </div>
        <!--end::Tab pane-->
        <!--begin::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
            <div class="d-flex flex-column gap-7 gap-lg-10">
                <!--begin::Inventory-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Inventory</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 row">
                        <!--begin::Input group-->
                        <div class="col-md-6 mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">SKU</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="{{ old('sku', $product->sku) }}">
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Enter the product SKU.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="col-md-6 mb-10 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required form-label">Quantity</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div class="d-flex gap-3">
                                <input type="number" name="inventory" class="form-control mb-2" min="1" placeholder="Total quantity" value="{{ old('inventory', $product->inventory) }}">
                            </div>
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Enter the product quantity.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card header-->

                </div>
                <!--end::Inventory-->

                <!--begin::Inventory-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Sizing</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0 ">
                        <div class="row mb-10">
                            <!--begin::Input group-->
                            <div class="col-md-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Length</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="length" class="form-control mb-2" placeholder="Product length" value="{{ old('length', $product->length) }}">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Height</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="height" class="form-control mb-2" placeholder="Product height" value="{{ old('height', $product->height) }}">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>

                        <div class="row">
                            <!--begin::Input group-->
                            <div class="col-md-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">width</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="width" class="form-control mb-2" placeholder="Product width" value="{{ old('width', $product->width) }}">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-6 mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Weight</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="{{ old('weight', $product->weight) }}">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::Inventory-->
            </div>
        </div>
        <!--end::Tab pane-->
    </div>
    <!--end::Tab content-->
    <div class="d-flex justify-content-end">
        <!--begin::Button-->
        <button type="submit"  class="btn btn-primary">
            {{ $pageTitle }}
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->
