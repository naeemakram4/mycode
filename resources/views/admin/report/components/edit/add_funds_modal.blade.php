<div class="modal fade" id="addFundsModal" tabindex="-1" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add Funds to Wallet</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body px-5 px-xl-15">
                <form action="{{ route('store-setting.add.funds', $account->AccountKey) }}" method="POST" class="form" id="card-form">
                    @csrf
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Name On Card</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control fw-normal" required placeholder="Name on card" name="card_name" id="card-name">
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative p-0">
                            <!--begin::Input-->
                            <div id="card-number" class="form-control" style='height: 3em;'></div>
                            <!--end::Input-->
                            <!--begin::Card logos-->
                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}" alt="" class="h-25px">
                                <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}" alt="" class="h-25px">
                                <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}" alt="" class="h-25px">
                            </div>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-row mb-5 row">
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row fv-row fv-plugins-icon-container">
                                <div id="card-expiry" class="form-control" style='height: 3em;'></div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">CVV</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter a card CVV code" aria-label="Enter a card CVV code"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <div id="card-cvv" class="form-control" style='height: 3em; padding-top: 1em;'></div>
                                <!--end::Input-->
                                <!--begin::CVV icon-->
                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22 7H2V11H22V7Z" fill="black"></path>
                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::CVV icon-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->
                        <div class="col-md-4 fv-row px-1">
                            <!--begin::Input group-->
                            <label class="fw-bold form-label fs-6 mb-2">Billing Zip</label>
                            <div class="input-group">
                                <input type="text" id="billing-zip" class="form-control" required name="billing_zip"/>
                            </div>
                            <!--end::Input group-->
                        </div>


                    </div>
                    <!--end::Input group-->
                    <!--begin::Input wrapper-->
                    <div class="row mb-5">
                        <div class="col-md-6 ps-0">
                            <!--begin::Input group-->
                            <label class="required fw-bold form-label fs-6 mb-2">Amount to add</label>
                            <div class="input-group">
                                <span class="input-group-text" id="dollar">$</span>
                                <input type="number" required class="form-control" id="dollar" name="amount_to_add"/>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Input wrapper-->

                    <!--begin::Input group-->
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert" style="font-size:16px;color:red;"></div>
                    <!--end::Input group-->
                    <p class="text-primary">You will be charge 3% convenience fee!</p>
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" class="btn btn btn-primary fw-bolder w-100">Pay</button>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>



@push('pageInnerScript')

    <script src="https://js.stripe.com/v3/"></script>
    <script>

        var elementStyles = {
            base: {
            color: '#32325D',
            fontWeight: 500,
            fontFamily: 'Source Code Pro, Consolas, Menlo, monospace',
            fontSize: '16px',
            fontSmoothing: 'antialiased',

            '::placeholder': {
                color: '#CFD7DF',
            },
            ':-webkit-autofill': {
                color: '#e39f48',
            },
            },
            invalid: {
            color: '#E25950',

            '::placeholder': {
                color: '#FFCCA5',
            },
            },
        };

        var elementClasses = {
            focus: 'focused',
            empty: 'empty',
            invalid: 'invalid',
        };

        let stripe = Stripe('{{ env("STRIPE_PUBLISHABLE_KEY") }}')
        var elements = stripe.elements({
            fonts: [
                {
                    cssSrc: 'https://fonts.googleapis.com/css?family=Source+Code+Pro',
                },
            ],
            // Stripe's examples are localized to specific languages, but if
            // you wish to have Elements automatically detect your user's locale,
            // use `locale: 'auto'` instead.
            locale: window.__exampleLocale
        });

        // Floating labels
        var inputs = document.querySelectorAll('.modal-body .input');
        Array.prototype.forEach.call(inputs, function(input) {
            input.addEventListener('focus', function() {
            input.classList.add('focused');
            });
            input.addEventListener('blur', function() {
            input.classList.remove('focused');
            });
            input.addEventListener('keyup', function() {
            if (input.value.length === 0) {
                input.classList.add('empty');
            } else {
                input.classList.remove('empty');
            }
            });
        });

       // const elements = stripe.elements()
        //const cardElement = elements.create('card', {'style': style})
        const cardForm = document.getElementById('card-form')
        const cardName = document.getElementById('card-name')
        const cardBillingZip = document.getElementById('billing-zip')
        //cardElement.mount('#card-number')

        var cardNumber = elements.create('cardNumber', {
            style: elementStyles,
            classes: elementClasses,
        });
        cardNumber.mount('#card-number');

        var cardExpiry = elements.create('cardExpiry', {
            style: elementStyles,
            classes: elementClasses,
        });
        cardExpiry.mount('#card-expiry');

        var cardCvc = elements.create('cardCvc', {
            style: elementStyles,
            classes: elementClasses,
        });
        cardCvc.mount('#card-cvv');

        // Handle real-time validation errors from the card Element.
        cardNumber.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        cardExpiry.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        cardCvc.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        cardForm.addEventListener('submit', async (e) => {
            e.preventDefault()
            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardNumber,
                billing_details: {
                    name: cardName.value,
                    address: {
                        postal_code: cardBillingZip.value
                    }
                }
            })
            if (error) {
                console.log(error)
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                let input_payment_method = document.createElement('input')
                input_payment_method.setAttribute('type', 'hidden')
                input_payment_method.setAttribute('name', 'payment_method')
                input_payment_method.setAttribute('value', paymentMethod.id)
                cardForm.appendChild(input_payment_method)

                let input_customer = document.createElement('input')
                input_customer.setAttribute('type', 'hidden')
                input_customer.setAttribute('name', 'customer_id')
                input_customer.setAttribute('value', '{{ $account->StripeCustomerId }}')
                cardForm.appendChild(input_customer)

                cardForm.submit()
            }
        })
    </script>

@endpush
