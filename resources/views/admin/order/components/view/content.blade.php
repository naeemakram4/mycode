<!--begin::Tab content-->
<div class="tab-content">
    <!--begin::Tab pane-->
    <div class="tab-pane fade active show" id="kt_ecommerce_sales_order_summary" role="tab-panel">
        <!--begin::Orders-->
        <div class="d-flex flex-column gap-7 gap-lg-10">
            <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                <!--begin::Payment address-->
                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                    <!--begin::Background-->
                    <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                        <img src="{{ asset('assets/media/icons/duotune/ecommerce/ecm001.svg') }}" class="w-175px">
                    </div>
                    <!--end::Background-->
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Billing Address</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">{{ $order->customer->billing_address_line1 }},
                        <br>{{ $order->customer->billing_address_line2 }},
                        <br>{{ $order->customer->billing_city .', '. $order->customer->billing_state .', '. $order->customer->billing_postal_code}},
                        <br>{{ $order->customer->billing_country }}
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Payment address-->
                <!--begin::Shipping address-->
                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                    <!--begin::Background-->
                    <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                        <img src="{{ asset('assets/media/icons/duotune/ecommerce/ecm006.svg') }}" class="w-175px">
                    </div>
                    <!--end::Background-->
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Shipping Address</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">{{ $order->customer->shipping_address_line1 }},
                        <br>{{ $order->customer->shipping_address_line2 }},
                        <br>{{ $order->customer->shipping_city .', '. $order->customer->shipping_state .', '. $order->customer->shipping_postal_code}},
                        <br>{{ $order->customer->shipping_country }}
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Shipping address-->
            </div>
            <!--begin::Product List-->
            <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Order #{{ $order->order_id }}</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">Product</th>
                                    <th class="min-w-100px">Height/ Width</th>
                                    <th class="min-w-100px">Length/ Weight</th>
                                    <th class="min-w-100px">Color</th>
                                    <th class="min-w-100px">SKU</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            <!--begin::Products-->
                            @foreach($order->products as $product)
                                <tr>
                                    <!--begin::Product-->
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <div class="symbol symbol-50px">
                                                @if (!blank($product->image))
                                                    <a href="{{ route('view.product',$product->id) }}">
                                                        <img src="{{asset('/products/'.$product->image)}}" style="width:40px; height:40px;">
                                                    </a>
                                                @else
                                                    <img src="{{asset("/settings/top-menu-cooco-logo.png")}}">
                                                @endif
                                            </div>
                                            <!--end::Thumbnail-->
                                            <!--begin::Title-->
                                            <div class="ms-5">
                                                <a href="{{ route('view.product',$product->id) }}" class="fw-bolder text-gray-600 text-hover-primary">
                                                    {{ $product->name}}
                                                </a>
                                                <div class="fs-7 text-muted">Product ID: {{ $product->id }}</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </td>
                                    <!--end::Product-->
                                    <td>
                                        {{ $product->height .'/ '. $product->width}}
                                    </td>
                                    <td>
                                        {{ $product->length .'/ '. $product->weight}}
                                    </td>
                                    <!--begin::Platform-->
                                    <td>{{ $product->color }}</td>
                                    <!--end::Platform-->
                                    <!--begin::SKU-->
                                    <td>{{ $product->sku }}</td>
                                    <!--end::SKU-->
                                </tr>
                            @endforeach
                            <tr>
                                <td class="text-start fw-bolder text-gray-600">Order Date</td>
                                <td class="text-start">{{ $order->order_date }}</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bolder text-gray-600">Employee</td>
                                <td class="text-start">
                                    <!--begin::Employee-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <div>
                                            <a href="{{ route('view.team',$order->team->id) }}" class="fw-bolder text-gray-600 text-hover-primary">
                                                {{ $order->team->name}}
                                            </a>
                                            <div class="fs-7 text-muted">{{ $order->team->phone }}</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                <!--end::Employee-->
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bolder text-gray-600">Platform</td>
                                <td class="text-start">{{ $order->origin->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bolder text-gray-600">Tracking</td>
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <div>
                                            <span class="fw-bolder text-gray-600">Tracking ID: </span> {{ $order->tracking_id}}
                                            <a href="{{ $order->tracking_url }}" target="_blank" class="fw-bolder text-gray-600 text-hover-primary">
                                                <div class="fs-7">{{ substr($order->tracking_url, 0, 30) }}</div>
                                            </a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bolder text-gray-600">Packing</td>
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        Gift Bag: {{ ($order->gift_bag == 1) ? 'Yes' : 'No'}} <br>
                                        Gift Wrap: {{ ($order->gift_wrap == 1) ? 'Yes' : 'No' }}
                                        <!--end::Title-->
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <!--end::Table head-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Product List-->
        </div>
        <!--end::Orders-->
    </div>
    <!--end::Tab pane-->

    <!--begin::Tab pane-->
    <div class="tab-pane fade" id="kt_ecommerce_sales_order_replacement" role="tab-panel">
        <!--begin::Orders-->
        <div class="d-flex flex-column gap-7 gap-lg-10">
            <!--begin::Order history-->
            <div class="card card-flush py-4 flex-row-fluid">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Replacements</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">Replacement ID</th>
                                    <th class="min-w-175px">Platform</th>
                                    <th class="min-w-70px">Order Status</th>
                                    <th class="min-w-100px">Item No</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach($order->replacements as $replacement)
                                    <tr>
                                        <!--begin::Date-->
                                        <td>{{ $replacement->replacement_id }}</td>
                                        <!--end::Date-->
                                        <!--begin::Comment-->
                                        <td>{{ $replacement->origin->name }}</td>
                                        <!--end::Comment-->
                                        <!--begin::Status-->
                                        <td>
                                            @if ($replacement->status == App\Models\Replacement::COMPLETED_STATUS)
                                                <span class="badge badge-light-success">{{ ucfirst($replacement->status) }}</span>
                                            @elseif ($replacement->status == App\Models\Replacement::SHIPPED_STATUS)
                                                <span class="badge badge-light-info">{{ ucfirst($replacement->status) }}</span>
                                            @else
                                                <span class="badge badge-light-primary">{{ ucfirst($replacement->status) }}</span>
                                            @endif
                                        </td>
                                        <!--end::Status-->
                                        <!--begin::Customer Notified-->
                                        <td>{{ $replacement->product->sku }}</td>
                                        <!--end::Customer Notified-->
                                        <td>{{ $replacement->order_date }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table head-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Order history-->
        </div>
        <!--end::Orders-->
    </div>
    <!--end::Tab pane-->

    <!--begin::Tab pane-->
    <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
        <!--begin::Orders-->
        <div class="d-flex flex-column gap-7 gap-lg-10">
            <!--begin::Order history-->
            <div class="card card-flush py-4 flex-row-fluid">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Order History</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                            <!--begin::Table head-->
                            <thead>
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">Date Added</th>
                                <th class="min-w-175px">Comment</th>
                                <th class="min-w-70px">Order Status</th>
                                <th class="min-w-100px">Customer Notifed</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">

                            </tbody>
                            <!--end::Table head-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Order history-->
        </div>
        <!--end::Orders-->
    </div>
    <!--end::Tab pane-->
</div>
<!--end::Tab content-->
