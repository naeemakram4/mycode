<!--begin::Accordion-->
<div class="accordion accordion-icon-toggle" id="kt_accordion_2">
    <!--begin::Item-->
    <div class="mb-5">
        <!--begin::Header-->
        <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1">
            <span class="accordion-icon">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                    </svg>
                </span>
            </span>
            <h3 class="fs-4 fw-bold mb-0 ms-4 text-primary">Advanced Filters</h3>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div id="kt_accordion_2_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#kt_accordion_2">
            <!--begin::Form group-->
            <div class="form-group">
                <div class="form-group row mb-5">
                    <div class="col-md-3">
                        <label class="form-label">Select Status:</label>
                        <select id='status' class="form-select form-select-sm form-select-solid"
                                data-control="select2" data-hide-search="true">
                            <option value="">All Status</option>
                            @foreach($status as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Date Range:</label>
                        <input id="kt_daterangepicker_1" name="daterange" class="form-control form-control-sm form-control-solid" placeholder="Pick date rage"/>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('customer.request.index') }}" data-repeater-delete class="btn btn-sm btn-light-primary mt-3 mt-md-9">
                            <i class="la la-trash-o fs-3"></i>Clear Filters
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Form group-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Item-->
</div>
<!--end::Accordion-->
