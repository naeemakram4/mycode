<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Products ({{ count($account->products) }})</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        @include('dealer.store-setting.components.edit.product-advance-filter')
        @include('dealer.store-setting.components.edit._product_table')
    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
