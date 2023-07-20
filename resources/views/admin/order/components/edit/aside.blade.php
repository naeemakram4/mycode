<!--begin::Aside column-->
<div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10" data-select2-id="select2-data-131-mg42">
    <!--begin::Order details-->
    <div class="card card-flush py-4" data-select2-id="select2-data-130-zd8w">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>Order Details</h2>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="d-flex flex-column gap-10">
                <!--begin::Input group-->
                <div class="fv-row">
                    <!--begin::Label-->
                    <label class="form-label mb-5">System Order ID:
                        <span class="fw-bolder fs-3 ps-5">#{{ $order->id }}</span>
                    </label>
                    <!--end::Label-->

                    <div>
                        <!--begin::Label-->
                        <label class="required form-label">Order ID</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control" name="order_id" placeholder="Enter order id" value="{{ old('order_id', $order->order_id) }}" />
                        <!--end::Input-->
                    </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">Order Type</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select name="order_type" class="form-select select2-hidden-accessible" data-control="select2"
                            data-hide-search="true" data-placeholder="Select an option" tabindex="-1"
                            aria-hidden="true">
                        <option></option>
                        @foreach($orderTypes as $orderType)
                            <option value="{{ $orderType->id }}" {{ old('order_type', $order->order_type_id) == $orderType->id ? 'selected' : '' }}>
                                {{$orderType->name}}
                            </option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">Customer</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select name="customer_id" class="form-select select2-hidden-accessible" data-control="select2"
                            data-placeholder="Select an option" tabindex="-1" aria-hidden="true">
                        <option></option>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" {{ old('customer_id', $order->customer_id) == $customer->id ? 'selected' : '' }}>
                                {{ $customer->first_name .' '. $customer->last_name }}
                            </option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Select the customer of the order.</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">Operated By</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select name="employee_id" class="form-select select2-hidden-accessible" data-control="select2"
                            data-hide-search="true" data-placeholder="Select an option" tabindex="-1"
                            aria-hidden="true">
                        <option></option>
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}" {{ old('employee_id', $order->team_id) == $employee->id ? 'selected' : '' }}>
                                {{ $employee->name }}
                            </option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Select employee to process order</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">Shipping Option</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select name="shipment_option" class="form-select select2-hidden-accessible" data-control="select2"
                            data-hide-search="true" data-placeholder="Select an option" tabindex="-1"
                            aria-hidden="true">
                        <option></option>
                        @foreach($shippingOptions as $shippingOption)
                            <option value="{{ $shippingOption }}" {{ old('shipment_option', $order->shipment_option) == $shippingOption ? 'selected' : '' }}>
                                {{ ucfirst($shippingOption)  }}
                            </option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="required form-label">Order Date</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input class="form-control" name="order_date" value="{{ old('order_date', $order->order_date) }}" placeholder="Select a date" id="orderDate"/>
                    <!--end::Editor-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the date of the order to process.</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->

                <div class="row">
                    <div class="col">
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" id="gitBag" {{ ($order->gift_bag == 1) ? 'checked="checked"' : '' }} name="gift_bag">
                            <label class="form-check-label required" for="gitBag">Gift Bag</label>
                        </div>
                        <!--end::Checkbox-->
                    </div>
                    <div class="col">
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" id="giftWrap" {{ ($order->gift_wrap == 1) ? 'checked="checked"' : '' }} name="gift_wrap">
                            <label class="form-check-label required" for="giftWrap">Gift Wrap</label>
                        </div>
                        <!--end::Checkbox-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card header-->
    </div>
    <!--end::Order details-->
</div>
<!--end::Aside column-->
