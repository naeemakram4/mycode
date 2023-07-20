<!--begin::Content-->
<div class="flex-lg-row-fluid ms-lg-15">
    <!--begin:::Tabs-->
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
               href="#kt_general_tab">General</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
               href="#kt_orders_tab">Orders</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
               href="#kt_replacements_tab">Replacements</a>
        </li>
        <!--end:::Tab item-->
    </ul>
    <!--end:::Tabs-->
    <!--begin:::Tab content-->
    <div class="tab-content" id="myTabContent">
        <!--begin:::Tab pane-->
        <div class="tab-pane fade active show" id="kt_general_tab" role="tabpanel">
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bolder">General Info</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="fw-bolder fs-2">
                        <span class="text-muted fs-6 fw-bold">{{ $customer->address }},</span>
                        <div class="fs-6 fw-normal text-muted">{{ $customer->city. ', ' .$customer->state}},</div>
                        <div class="fs-6 fw-normal text-muted">{{ $customer->country}},</div>
                        <div class="fs-6 fw-normal text-muted">{{ $customer->postal_code}}</div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>

            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bolder">Billing Info</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="fw-bold fs-2">
                        <table class="table table-flush fs-6 gy-1">
                            <tbody>
                                <tr>
                                    <td class="text-muted min-w-125px w-125px">Address Line 1</td>
                                    <td class="text-gray-800">{{ $customer->billing_address_line1 }}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted min-w-125px w-125px">Address Line 2</td>
                                    <td class="text-gray-800">{{ $customer->billing_address_line2 }}</td>
                                </tr>

                                <tr>
                                    <td class="text-muted min-w-125px w-125px">City/ State</td>
                                    <td class="text-gray-800">{{ $customer->billing_city .'/ '.  $customer->billing_state}}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted min-w-125px w-125px">Country</td>
                                    <td class="text-gray-800">{{ $customer->billing_country }}</td>
                                </tr>
                                <tr>
                                    <td class="text-muted min-w-125px w-125px">Postal Code</td>
                                    <td class="text-gray-800">{{ $customer->billing_postal_code }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Card body-->
            </div>

            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bolder">Shipping Info</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="fw-bold fs-2">
                        <table class="table table-flush fs-6 gy-1">
                            <tbody>
                            <tr>
                                <td class="text-muted min-w-125px w-125px">Address Line 1</td>
                                <td class="text-gray-800">{{ $customer->shipping_address_line1 }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted min-w-125px w-125px">Address Line 2</td>
                                <td class="text-gray-800">{{ $customer->shipping_address_line2 }}</td>
                            </tr>

                            <tr>
                                <td class="text-muted min-w-125px w-125px">City/ State</td>
                                <td class="text-gray-800">{{ $customer->shipping_city .'/ '.  $customer->shipping_state}}</td>
                            </tr>
                            <tr>
                                <td class="text-muted min-w-125px w-125px">Country</td>
                                <td class="text-gray-800">{{ $customer->shipping_country }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted min-w-125px w-125px">Postal Code</td>
                                <td class="text-gray-800">{{ $customer->shipping_postal_code }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <!--end:::Tab pane-->
        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="kt_orders_tab" role="tabpanel">
            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Orders</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 pb-5">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                        <!--begin::Table head-->
                        <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                        <!--begin::Table row-->
                        <tr class="text-start text-muted text-uppercase gs-0">
                            <th class="min-w-100px">Order ID</th>
                            <th>Status</th>
                            <th>Platform</th>
                            <th class="min-w-100px">Item No.</th>
                            <th class="text-end min-w-100px pe-4">Order Date</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fs-6 fw-bold text-gray-600">
                        <!--begin::Table row-->
                            @foreach($customer->orders as $order)
                                <tr>
                                    <td>
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $order->order_id }}</a>
                                    </td>
                                    <td>
                                        @if ($order->status == App\Models\Order::COMPLETED_STATUS)
                                            <span class="badge badge-light-success">{{ ucfirst($order->status) }}</span>
                                        @elseif ($order->status == App\Models\Order::SHIPPED_STATUS)
                                            <span class="badge badge-light-info">{{ ucfirst($order->status) }}</span>
                                        @elseif ($order->status == App\Models\Order::CANCELLED_STATUS)
                                            <span class="badge badge-light-danger">{{ ucfirst($order->status) }}</span>
                                        @elseif ($order->status == App\Models\Order::REFUNDED_STATUS)
                                            <span class="badge badge-light-warning">{{ ucfirst($order->status) }}</span>
                                        @else
                                            <span class="badge badge-light-primary">{{ ucfirst($order->status) }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $order->origin->name }}</td>
                                    <td>{{ $order->products[0]->sku ?? '--' }}</td>
                                    <td class="pe-0 text-end">{{ $order->order_date }}</td>
                                </tr>
                            @endforeach
                        <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end:::Tab pane-->
        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="kt_replacements_tab" role="tabpanel">
            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Replacements</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 pb-5">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                        <!--begin::Table head-->
                        <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                        <!--begin::Table row-->
                        <tr class="text-start text-muted text-uppercase gs-0">
                            <th class="min-w-100px">Replacement ID</th>
                            <th>Status</th>
                            <th>Platform</th>
                            <th class="min-w-100px">Item No.</th>
                            <th class="text-end min-w-100px pe-4">Date</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fs-6 fw-bold text-gray-600">
                        <!--begin::Table row-->
                        @foreach($customer->replacements as $replacement)
                            <tr>
                                <!--begin::Invoice=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $replacement->replacement_id }}</a>
                                </td>
                                <!--end::Invoice=-->
                                <!--begin::Status=-->
                                <td>
                                    @if ($replacement->status == App\Models\Replacement::COMPLETED_STATUS)
                                        <span class="badge badge-light-success">{{ ucfirst($replacement->status) }}</span>
                                    @elseif ($replacement->status == App\Models\Replacement::SHIPPED_STATUS)
                                        <span class="badge badge-light-info">{{ ucfirst($replacement->status) }}</span>
                                    @else
                                        <span class="badge badge-light-primary">{{ ucfirst($replacement->status) }}</span>
                                    @endif
                                </td>
                                <!--end::Status=-->
                                <!--begin::Amount=-->
                                <td>{{ $replacement->origin->name }}</td>
                                <!--end::Amount=-->
                                <!--begin::Date=-->
                                <td>{{ $replacement->products[0]->sku ?? '--' }}</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="pe-0 text-end">{{ $replacement->order_date }}</td>
                                <!--end::Action=-->
                            </tr>
                        @endforeach
                        <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end:::Tab pane-->
    </div>
    <!--end:::Tab content-->
</div>
<!--end::Content-->
