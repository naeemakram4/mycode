@extends('layouts.admin')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="card">
        <div class="card-body pt-6">
            @include('admin.customer.components.edit_form')
        </div>
    </div>
@endsection

@push('pageInnerScript')
    <script>
        $(document).on('click','#copyBillingAddress',function(){
            var billingAddress1=$('#billingAddressLine1').val();
            var billingAddress2=$('#billingAddressLine2').val();
            var billingCity=$('#billingCity').val();
            var billingState=$('#billingState').val();
            var billingCountry=$('#billingCountry').val();
            var billingPostalCode=$('#billingPostalCode').val();

            $('#shippingAddressLine1').val(billingAddress1);
            $('#shippingAddressLine2').val(billingAddress2);
            $('#shippingCity').val(billingCity);
            $('#shippingState').val(billingState);
            $('select[name^="shipping_country"] option[value="'+billingCountry+'"]').attr("selected","selected");
            $('#shippingPostalCode').val(billingPostalCode);
        });
    </script>
@endpush
