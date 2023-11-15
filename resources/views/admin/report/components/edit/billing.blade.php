<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Payment Sources</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Addresses-->
            <div class="row gx-9 gy-6">
                @if(isset($intents) && (count($intents) > 0))
                @foreach($intents as $intent)
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Address-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                            <!--begin::Details-->
                            <div class="d-flex flex-column py-2">
                                <div class="d-flex align-items-center fs-5 fw-bolder mb-5">
                                    {{$intent->paymentMethod->us_bank_account->bank_name ?? ''}}
                                    @if($intent->status != 'succeeded')
                                        <span class ="badge badge-light-warning fs-7 ms-2">Unverified</span>
                                    @else
                                        <span class ="badge badge-light-success fs-7 ms-2">Verified</span>
                                    @endif

                                    @if($intent->id == $account->SetupIntentId)
                                        <span class ="badge badge-light-primary fs-7 ms-2">Primary</span>
                                    @endif

                                </div>

                                <div class="d-flex align-items-center fs-5 fw-bolder mb-5">
                                    {{$intent->paymentMethod->billing_details->name ?? ''}}
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span>{{ isset($intent->paymentMethod->us_bank_account->last4) ? '********' . $intent->paymentMethod->us_bank_account->last4 : ''}}</span>
                                </div>

                            </div>
                            <!--end::Details-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-2">
                                @if($intent->status != 'succeeded')
                                    <a href="javascript:void(0);" onclick="openwindow('{{ (isset($intent->next_action->verify_with_microdeposits->hosted_verification_url)) ? $intent->next_action->verify_with_microdeposits->hosted_verification_url : '' }}')" class="btn btn-sm btn-primary me-3">Verify Account</a>
                                @endif

                                @if($intent->id != $account->SetupIntentId && $intent->status == 'succeeded')
                                    <a href="{{ route('store-setting.primary.billing', $intent->id) }}" class="btn btn-sm btn-success me-3">Make Primary</a>
                                @endif

                                <a href="{{ route('store-setting.remove.billing', $intent->id) }}"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to remove this Payment Method?')">
                                    Remove
                                </a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Address-->
                    </div>
                    <!--end::Col-->
                @endforeach
                @endif
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed flex-stack h-xl-100 mb-10 p-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <!--
                            <div class="mb-3 mb-md-0 fw-bold">
                                <h4 class="text-gray-900 fw-bolder">Add Billing Details!</h4>
                                <div class="fs-6 text-gray-700 pe-7">It could take around, 48 hours to verify new billing detail.</div>
                            </div>
                            -->
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="javascript:void(0);"
                               class="btn btn-primary px-6 align-self-center text-nowrap"
                               data-bs-toggle="modal"
                               data-bs-target="#billingModal">
                                Add a Bank Account
                            </a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Addresses-->
        </div>
        <!--end::Card body-->
</div>
<!--end::details View-->
    
    @if(isset($intent->next_action) && $intent->next_action != null)
    <div class="alert bg-light-primary border border-primary border-3 border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10">
        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                 fill="none">
                <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
                      fill="black"></path>
                <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
                      fill="black"></path>
            </svg>
        </span>

        <!--begin::Content-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <h2 class="mb-1">Notice!</h2>
            <span class="lead">If the customer opts for microdeposit verification, Stripe automatically sends two small deposits to the provided bank account. These deposits can take 1-2 business days to appear on the customer’s online bank statement. When the deposits are expected to arrive, the customer receives an email with a link to confirm these amounts and verify the bank account with Stripe. After verification is complete, the payment begins processing.</span>
        </div>
        <!--end::Content-->
    </div>
    @endif


@section('pageInnerModals')
    {{--Add new billing modal--}}
    <div class="modal fade" id="billingModal" tabindex="-1" role="dialog">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Add a Bank Account</h2>
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
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="payment-form" action="/api/stripe/createSetupIntent?customerId={{ $account->StripeCustomerId }}" class="form">
                    @csrf
                    <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7 fv-plugins-icon-container">
                                <div class="col-xl-6">
                                    <label class="fs-6 fw-bold form-label required">Account Name</label>
                                    <input id="accountholder-name" value=""  type="text" class="form-control form-control-solid" name="account_name" />
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="fs-6 fw-bold form-label required">Account Email</label>
                                    <input value="" id="email" type="email" class="form-control form-control-solid" placeholder="" name="account_email" />
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                                <label class="form-label required">Account Type</label>

                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="radio" name="account_type" value="individual" id="all_conditions" checked="checked">
                                    <label class="form-check-label" for="all_conditions">
                                        individual
                                    </label>
                                </div>
                                <!--end::Radio-->

                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="radio" name="account_type" value="company" id="any_conditions">
                                    <label class="form-check-label" for="any_conditions">
                                        company
                                    </label>
                                </div>
                                <!--end::Radio-->
                            </div>
                            
                            <!--begin::Input group-->
                            <!--
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <label class="form-label required">Account Type</label>
                                <select id="account-holder-type" name="account_type" class="form-select form-select-solid"
                                        data-control="select2" data-placeholder="Select Account Type" data-allow-clear="true">
                                    <option value="individual">individual</option>
                                    <option value="company">company</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            -->
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <label class="form-label required">Bank Routing Number</label>
                                <input value="" id="routing-number" type="text" class="form-control form-control-solid" placeholder="" name="bank_routing_number" />
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <input value="" readonly="readonly" id="bank-name" type="text" class="form-control form-control-solid" placeholder="Bank Institution" name="" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <label class="form-label required">Bank Account Number</label>
                                <input value="" id="account-number" type="text" class="form-control form-control-solid" placeholder="" name="bank_account_number"/>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <label class="form-label required">Confirm Bank Account Number</label>
                                <input value="" id="confirm-account-number" type="text" class="form-control form-control-solid" placeholder="" name="confirm_bank_account_number"/>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <!--
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Copy of voided check</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true"
                                       data-bs-content="<div class='p-4 rounded bg-light'> <div class='d-flex flex-stack text-muted mb-4'> <i class='fas fa-university fs-3 me-3'></i> <div class='fw-bold'>INCBANK **** 1245 CHECK</div> </div> <div class='d-flex flex-stack fw-bold text-gray-600'> <div>Date</div> <div>dd-mm-yyyy</div> </div> <div class='separator separator-dashed my-2'></div> <div class='d-flex flex-stack text-dark fw-bolder mb-2'> <div>Order of</div> <div>John Doe</div> </div> <div class='d-flex flex-stack text-muted mb-2'> <div>Amount</div> <div>USD345.00</div> </div> <div class='d-flex flex-stack text-muted'> <div>Memo</div> <div>Payment</div> </div> </div>" data-bs-original-title="" title=""></i>
                                </label>
                                <input type="file" class="form-control form-control-solid" placeholder="" name="check" value="" accept="image/png, image/gif, image/jpeg"/>
                            </div>
                            -->
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                        <div id="error-message"></div>
                        <!--begin::Actions-->
                        <div class="text-center pt-10">
                            <button type="button" class="btn btn-lg btn-light me-3" data-bs-dismiss="modal" >Cancel</button>
                            <button id="submit-button" type="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">
                                    Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection

@section('pageScriptFiles')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/billing.js') }}"></script>
@endsection

@push('pageInnerScript')
    <script src = "https://js.stripe.com/v3/" > </script>
    <script>
        var clientSecret = '{{ (isset($intent->client_secret)) ? $intent->client_secret : "" }}';

        let publishable_key = '{{ env("STRIPE_PUBLISHABLE_KEY") }}'; //get stripe key here
        var stripe = Stripe(publishable_key); //intialize stripe

        var paymentMethodForm = document.getElementById('payment-form');
        var accountholderName = document.getElementById('accountholder-name');
        var email = document.getElementById('email');
        var accountNumber = document.getElementById('account-number');
        var confirmAccountNumber = document.getElementById('confirm-account-number');
        var routingNumber = document.getElementById('routing-number');
        var accountHolderType= document.querySelector('input[name="account_type"]:checked');
        //var accountHolderType= document.getElementById('account-holder-type');

        var submitButton    = document.getElementById('submit-button');
        var bankNameField   = document.getElementById('bank-name');

        // var clientSecret = submitButton.dataset.secret;
        /*
        paymentMethodForm.addEventListener('submit', function(event) {
            event.preventDefault();


            if(accountNumber.value != confirmAccountNumber.value){

                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, Account No & Confirm Account No Field doesn't match, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

            }else{

                // Send Ajax to create a new Setup Intent
                $.ajax({
                    url: '/api/stripe/createSetupIntent?customerId=' + '{{ $account->StripeCustomerId }}',
                    type: 'post',
                    dataType: 'json',
                    beforeSend: function() {
                        submitButton.disabled=true;
                        submitButton.innerHTML='Please Wait ...';
                    },
                }).done(function(data){
                    
                    console.log(data);
                    accountSetup(data.client_secret);
                    submitButton.disabled=false;
                    submitButton.innerHTML='Done';

                });

            }

            // Then confirm the Us bank account setup
            
            /*
            stripe.confirmUsBankAccountSetup(clientSecret, {
                payment_method: {
                    billing_details: {
                        name: accountholderName.value,
                        email: email.value,
                    },
                    us_bank_account: {
                        account_number: accountNumber.value,
                        routing_number: routingNumber.value,
                        account_holder_type: accountHolderType.value, // 'individual' or 'company'
                    },
                },
            })
            .then(({setupIntent, error}) => {
                if (error) {
                    // Inform the customer that there was an error.
                    console.log(error.message);
                    document.getElementById('error-message').innerHTML = error.message;

                } else {
                    // document.getElementById('error-message').innerHTML = JSON.stringify(setupIntent);
                    setTimeout(function () { location.reload(1); }, 2000);
                    // Handle next step based on the intent's status.
                    // console.log("SetupIntent ID: " + setupIntent.id);
                    // console.log("SetupIntent status: " + setupIntent.status);
                }
            });
            *//*
        });
        */

        function accountSetup(clientSecret){

            stripe.confirmUsBankAccountSetup(clientSecret, {
                payment_method: {
                    billing_details: {
                        name: accountholderName.value,
                        email: email.value,
                    },
                    us_bank_account: {
                        account_number: accountNumber.value,
                        routing_number: routingNumber.value,
                        account_holder_type: accountHolderType.value, // 'individual' or 'company'
                    },
                },
            })
            .then(({setupIntent, error}) => {
                if (error) {
                    // Inform the customer that there was an error.
                    console.log('full error : ', error);
                    console.log(error.message);
                    document.getElementById('error-message').innerHTML = error.message;

                } else {
                    // document.getElementById('error-message').innerHTML = JSON.stringify(setupIntent);
                    setTimeout(function () { location.reload(1); }, 2000);
                    // Handle next step based on the intent's status.
                    // console.log("SetupIntent ID: " + setupIntent.id);
                    // console.log("SetupIntent status: " + setupIntent.status);
                }
            });

        }

        function openwindow(hosted_verification_url){
            var win = window.open(hosted_verification_url, 'windowName', 'width=1000, height=700, left=24, top=24, scrollbars, resizable');
            var timer = setInterval(function() {
                if(win.closed) {
                    clearInterval(timer);
                    window.location.reload();
                }
            }, 500);
        }

        var timer, delay = 500;
        $('#routing-number').bind('keydown blur change', function(e) {
            var _this = $(this);
            clearTimeout(timer);
            timer = setTimeout(function() {
                resolveRoutingNumber(_this.val());
            }, delay );
        });

        function resolveRoutingNumber(routing_number){
            console.log(routing_number);

            if (routing_number == '')
                return false;

            $.ajax({
                url: 'https://www.routingnumbers.info/api/data.json?rn=' + routing_number,
                type: 'get',
                dataType: 'json',
                  beforeSend: function() {
                    bankNameField.placeholder ='Please Wait ...';
                },
            }).done(function(data){
                
                console.log(data);
                bankNameField.value = (data.code == '200') ? data.customer_name : data.message;

            });

        }


    </script>
@endpush
