<form class="form p-5" method="POST" action="{{ route('add_customer_data') }}">
    @csrf

    @include('admin.customer.components.sections.customer-section')

    <div class="separator my-20 mx-20"></div>

    <div class="row">
        @include('admin.customer.components.sections.billing-section')
        @include('admin.customer.components.sections.shipping-section')
    </div>

    <div class="mb-10">
        <input class="form-check-input" name="status" checked="checked" type="checkbox" />
        <label class="form-check-label" for="form_checkbox">
            Active
        </label>
    </div>

    <button type="submit" class="btn btn-primary">
        Create New Customer
    </button>
</form>
