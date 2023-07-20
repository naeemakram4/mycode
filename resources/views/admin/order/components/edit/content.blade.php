<!--begin::Main column-->
<div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
    <!--begin::Order details-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Update Product</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="d-flex flex-column gap-10">
                <!--begin::Input group-->
                <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">Update product to this order</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select name="products[]" class="form-select select2-hidden-accessible" data-control="select2"
                            data-placeholder="Select an option" tabindex="-1" aria-hidden="true" data-allow-clear="true" multiple="multiple">
                        <option></option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}" {{ ($order->hasProduct($product->id)) ? 'selected' : '' }}>
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card header-->
        </div>
        <!--end::Order details-->

        <!--begin::Order details-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>General Details</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::General details-->
                <div class="d-flex flex-column gap-5 gap-md-7">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column flex-md-row gap-5">
                        <div class="flex-row-fluid">
                            <!--begin::Label-->
                            <label class="required form-label">Design</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select name="design_id" class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" tabindex="-1" aria-hidden="true">
                                <option></option>
                                @foreach($designs as $design)
                                    <option value="{{ $design->id }}" {{ old('design_id', $order->product_design_id) == $design->id ? 'selected' : '' }}>
                                        {{ $design->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Select2-->
                        </div>

                        <div class="flex-row-fluid">
                            <!--begin::Label-->
                            <label class="form-label">Fonts</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select name="font_id" class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" tabindex="-1" aria-hidden="true">
                                <option></option>
                                @foreach($designs as $design)
                                    <option value="{{ $design->id }}" {{ old('font_id', $order->product_design_id) == $design->id ? 'selected' : '' }}>
                                        {{ $design->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Select2-->
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Platform</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select name="platform_id" class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" tabindex="-1" aria-hidden="true">
                                <option></option>
                                @foreach($platforms as $platform)
                                    <option value="{{ $platform->id }}" {{ old('platform_id', $order->origin_id) == $platform->id ? 'selected' : '' }}>
                                        {{ $platform->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Select2-->
                        </div>

                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Initial</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control" name="initial" placeholder="" value="{{ old('initial', $order->initial) }}">
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col">
                            <!--begin::Label-->
                            <label class="required form-label">Quantity</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" min="1" class="form-control" name="quantity" placeholder="" value="{{ old('quantity', $order->quantity) }}">
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Label Image</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" class="form-control" name="label_image" accept=".png, .jpg, .jpeg">
                            <!--end::Input-->
                        </div>

                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Label Link</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control" name="label_link" placeholder="" value="{{ old('label_link', $order->label_link) }}">
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Tracking ID</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control" name="tracking_id" value="{{ old('tracking_id', $order->tracking_id) }}">
                            <!--end::Input-->
                        </div>

                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Tracking URL</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control" name="tracking_url" placeholder="" value="{{ old('tracking_url', $order->tracking_url) }}">
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Image</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" class="form-control" name="order_image" accept=".png, .jpg, .jpeg">
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Instructions</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control" name="instructions">{{ $order->instructions }}</textarea>
                            <!--end::Input-->
                        </div>

                        <div class="col">
                            <!--begin::Label-->
                            <label class="form-label">Comments</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control" name="comment">{{ $order->comment }}</textarea>
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::General details-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Order details-->
    </div>
    <div class="d-flex justify-content-end">
        <!--begin::Button-->
        <button type="submit" class="btn btn-primary">
            Update Order
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->
