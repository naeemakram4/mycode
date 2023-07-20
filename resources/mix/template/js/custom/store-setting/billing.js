"use strict";

// Class definition
var KTRefillGeneral = function () {
    // Elements
    var form;
    var submitButton;
    var validator;
    //var passwordMeter;

    // Handle form
    var handleForm = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'account_name': {
                        validators: {
                            notEmpty: {
                                message: 'Account Name is required'
                            }
                        }
                    },
                    'account_email': {
                        validators: {
                            notEmpty: {
                                message: 'Account Email is required'
                            }
                        }
                    },
                    'bank_routing_number': {
                        validators: {
                            notEmpty: {
                                message: 'Bank Routing Number is required'
                            }
                        }
                    },
                    'bank_account_number': {
                        validators: {
                            notEmpty: {
                                message: 'Bank Account Number is required'
                            }
                        }
                    },
                    'confirm_bank_account_number': {
                        validators: {
                            notEmpty: {
                                message: 'Bank Account Number confirmation is required'
                            },
                            identical: {
                                compare: function () {
                                    return form.querySelector('[name="bank_account_number"]').value;
                                },
                                message: 'The Bank Account Number and its confirm are not the same'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                console.log(status);
                if (status === 'Valid') {
                    
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;
                    /*
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
                    */

                    // Simulate ajax request
                    axios.post(form.getAttribute('action'), new FormData(form))
                        .then(function (response) {
                            accountSetup(response.data.client_secret);

                            console.log(response);
                            
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: " A new payment method was added. Please verify the account.!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                /*
                                console.log('result : ', result);
                                if (result.isConfirmed) {
                                    form.querySelector('[name="refillplan"]').value = "";
                                    form.querySelector('[name="amount"]').value = "";
                                    form.querySelector('[name="mobile"]').value = "";
                                    form.querySelector('[name="cmobile"]').value = "";
                                    form.querySelector('[name="cname"]').value = "";
                                    form.querySelector('[name="cemail"]').value = "";
                                    window.location.reload();
                                }
                                */
                            });
                            
                        })
                        .catch(function (error) {
                            console.log(error);
                            /*
                            let dataMessage = error.response.data.message;
                            let dataErrors = error.response.data.errors;

                            for (const errorsKey in dataErrors) {
                                if (!dataErrors.hasOwnProperty(errorsKey)) continue;
                                dataMessage += "\r\n" + dataErrors[errorsKey];
                            }

                            if (error.response) {
                                Swal.fire({
                                    text: dataMessage,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                            */
                        })
                        .then(function () {
                            // always executed
                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;
                        });
                        
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });

        
    }

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector('#payment-form');
            submitButton = document.querySelector('#submit-button');



            //passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTRefillGeneral.init();
});
