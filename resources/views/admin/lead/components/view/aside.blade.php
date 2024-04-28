<!--begin::Sidebar-->
<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
    <!--begin::Card-->
    <div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95" style="z-index: 95; position: fixed; top: 150px; width: 300px; left: 1302.5px;">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Lead Summary</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0 fs-6">
            <!--begin::Section-->
            <div class="mb-7">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Info-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <a href="javascript:void(0);" class="fs-5 fw-bolder text-gray-900 me-2">Lead Status</a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <span class="badge badge-light-info me-2">{{ ucfirst(str_replace('_', ' ', $lead->status)) }}</span>
                        <!--end::Email-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
            </div>
            <!--end::Section-->
            <!--begin::Seperator-->
            <div class="separator separator-dashed mb-7"></div>
            <!--end::Seperator-->
            <!--begin::Section-->
            <div class="mb-7">
                <!--begin::Title-->
                <h5 class="mb-4">Lead details</h5>
                <!--end::Title-->
                <!--begin::Details-->
                <div class="mb-0">
                    <!--begin::Plan-->
                    <span class="fw-bold text-gray-600">Type:</span>
                    <span class="badge badge-light-primary me-2">  {{ $lead->leadManagementType->label }}</span>
                    <!--end::Plan-->
                    <br>
                    <!--begin::Price-->
                    <span class="fw-bold text-gray-600">Value: ${{ $lead->lead_value }}</span>
                    <!--end::Price-->
                </div>
                <!--end::Details-->
            </div>
            <!--end::Section-->
            <!--begin::Seperator-->
            <div class="separator separator-dashed mb-7"></div>
            <!--end::Seperator-->
            <!--begin::Section-->
            <div class="mb-10">
                <!--begin::Title-->
                <h5 class="mb-4">Lead Services</h5>
                <!--end::Title-->
                <!--begin::Details-->
                <div class="mb-0">
                    @foreach($lead->services as $service)
                        <!--begin::Card expiry-->
                        <div class="fw-bold text-gray-600">{{ $service->label }}</div>
                        <!--end::Card expiry-->
                    @endforeach
                </div>
                <!--end::Details-->
            </div>
            <!--end::Section-->
            <!--begin::Seperator-->
            <div class="separator separator-dashed mb-7"></div>
            <!--end::Seperator-->
            <!--begin::Section-->
            <div class="mb-10">
                <!--begin::Title-->
                <h5 class="mb-4">Other Info</h5>
                <!--end::Title-->
                <!--begin::Details-->
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2">
                    <!--begin::Row-->
                    <tbody><tr class="">
                        <td class="text-gray-400">Created At:</td>
                        <td class="text-gray-800">{{ \Carbon\Carbon::parse($lead->created_at)->format('m-d-Y') }}</td>
                    </tr>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <tr class="">
                        <td class="text-gray-400">Updated At:</td>
                        <td class="text-gray-800">{{ \Carbon\Carbon::parse($lead->updated_at)->format('m-d-Y') }}</td>
                    </tr>
                    <!--end::Row-->
                    </tbody>
                </table>
                <!--end::Details-->
            </div>
            <!--end::Section-->
            <!--begin::Actions-->
            <div class="mb-0">
                <a href="{{ route('admin.lead-management.edit', $lead->id)  }}" class="btn btn-primary" id="kt_subscriptions_create_button">Edit Lead</a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Sidebar-->
