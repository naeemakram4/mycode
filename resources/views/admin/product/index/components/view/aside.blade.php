<!--begin::Sidebar-->
<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
    <!--begin::Card-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Card body-->
        <div class="card-body pt-15">
            <!--begin::Summary-->
            <div class="d-flex flex-center flex-column mb-5">
                <!--begin::Avatar-->
                <div class="symbol symbol-100px symbol-circle mb-7">
                    @if (!blank($product->image))
                        <img src="{{asset('/products/'.$product->image)}}" alt="Product Image">
                    @else
                        <img src="{{asset("/settings/top-menu-cooco-logo.png")}}" alt="Product Image">
                    @endif
                </div>
                <!--end::Avatar-->
                <!--begin::Name-->
                <a href="javascript:void(0);" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $product->name }}</a>
                <!--end::Name-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap flex-center">
                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded text-center py-3 px-3 mb-3">
                        <div class="fs-4 fw-bolder text-gray-700">
                            <span class="w-75px">{{ $product->orders->count() ?? '--' }}</span>
                        </div>
                        <div class="fw-bold text-muted">Orders</div>
                    </div>
                    <!--end::Stats-->
                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded text-center py-3 px-3 mx-4 mb-3">
                        <div class="fs-4 fw-bolder text-gray-700">
                            <span class="w-50px">{{ $product->replacements->count() ?? '--' }}</span>
                        </div>
                        <div class="fw-bold text-muted">Replacements</div>
                    </div>
                    <!--end::Stats-->
                    <!--begin::Stats-->
                    <div class="border border-gray-300 border-dashed rounded text-center py-3 px-3 mb-3">
                        <div class="fs-4 fw-bolder text-gray-700">
                            <span class="w-75px">{{ $product->inventory ?? '--' }}</span>
                        </div>
                        <div class="fw-bold text-muted">Stock</div>
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Summary-->
            <!--begin::Details toggle-->
            <div class="d-flex flex-stack fs-4 py-3">
                <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details"
                     role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
                    <span class="ms-2 rotate-180">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                                            </span></div>
                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title=""
                      data-bs-original-title="Edit product details">
                    <a href="{{ route('edit_product', $product->id) }}" class="btn btn-sm btn-light-primary">Edit</a>
                </span>
            </div>
            <!--end::Details toggle-->
            <div class="separator separator-dashed my-3"></div>
            <!--begin::Details content-->
            <div id="kt_customer_view_details" class="collapse show">
                <div class="py-5 fs-6">
                    <!--begin::Badge-->
                    <div class="badge badge-light-{{ $product->status == 1 ? 'success' : 'danger' }} d-inline">
                       {{ $product->status == 1 ? 'Active' : 'Inactive' }}
                    </div>
                    <!--begin::Badge-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Product SKU</div>
                    <div class="text-gray-600">{{ $product->sku }}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Color</div>
                    <div class="text-gray-600">{{ $product->color }}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Height/ Width</div>
                    <div class="text-gray-600">{{ $product->height .'/ '. $product->width}}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Length</div>
                    <div class="text-gray-600">{{ $product->length }}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Weight</div>
                    <div class="text-gray-600">{{ $product->weight }}</div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bolder mt-5">Description</div>
                    <div class="text-gray-600">{{ $product->description }}</div>
                    <!--begin::Details item-->
                </div>
            </div>
            <!--end::Details content-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Sidebar-->
