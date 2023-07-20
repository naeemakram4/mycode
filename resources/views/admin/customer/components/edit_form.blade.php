<form class="form p-5" method="POST" action="{{ route('update.customer', $customer->id) }}">
    @csrf
    @method('PUT')
    @include('admin.customer.components.sections.edit_customer-section')

    <div class="separator my-20 mx-20"></div>

    <div class="row">
        @include('admin.customer.components.sections.edit_billing-section')
        @include('admin.customer.components.sections.edit_shipping-section')
    </div>

    <div class="mb-10">
        <input class="form-check-input" name="status" {{ ($customer->status == 1) ?  'checked="checked"' : ''}}  type="checkbox" />
        <label class="form-check-label" for="form_checkbox">
            Active
        </label>
    </div>

    <button type="submit" class="btn btn-primary">
        Update Customer
    </button>
</form>
