<div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
    <!--begin:::Tabs-->
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-lg-n2 me-auto">
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">Order Summary</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_replacement">Replacements</a>
        </li>
        <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">Order History</a>
        </li>
        <!--end:::Tab item-->
    </ul>
    <!--end:::Tabs-->
    <!--begin::Button-->
    <a href="{{ route('edit.order', $order->id) }}" class="btn btn-light-primary btn-sm me-lg-n7">Edit Order</a>
    <!--end::Button-->
    <!--begin::Button-->
    <a href="{{ route('create.order') }}" class="btn btn-light-primary btn-sm">Add New Order</a>
    <!--end::Button-->
</div>
