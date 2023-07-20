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
                    'refillplan': {
                        validators: {
                            notEmpty: {
                                message: 'Plan is required'
                            }
                        }
                    },
                    'amount': {
                        validators: {
                            notEmpty: {
                                message: 'Amount is required'
                            }
                        }
                    },
                    'mobile': {
                        validators: {
                            notEmpty: {
                                message: 'The Mobile is required'
                            },
                            callback: {
                            }
                        }
                    },
                    'cmobile': {
                        validators: {
                            notEmpty: {
                                message: 'The Mobile confirmation is required'
                            },
                            identical: {
                                compare: function () {
                                    return form.querySelector('[name="mobile"]').value;
                                },
                                message: 'The Mobile and its confirm are not the same'
                            }
                        }
                    },
                    /*
                    'confirm_payment': {
                        validators: {
                            notEmpty: {
                                message: 'You must accept this'
                            }
                        }
                    },
                    */
                    'boost_pin': {
                        validators: {
                            notEmpty: {
                                message: 'Boost Pin is required'
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

                    var formData = new FormData(form);
                    formData.set("mobile", formData.get("mobile").replace(/[^\d]/g, ""));
                    formData.set("cmobile", formData.get("cmobile").replace(/[^\d]/g, ""));

                    // Simulate ajax request
                    axios.post(form.getAttribute('action'), formData)
                        .then(function (response) {
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "You have successfully Refilled! " + response.data.message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
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
                            });
                        })
                        .catch(function (error) {
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

        // Handle password input
        /*
        form.querySelector('input[name="password"]').addEventListener('input', function () {
            if (this.value.length > 0) {
                validator.updateFieldStatus('password', 'NotValidated');
            }
        });
        */
    }

    // Password input validation
    /*
    var validatePassword = function () {
        return (passwordMeter.getScore() > 50);
    }
    */

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector('#refillForm');
            submitButton = document.querySelector('#sbtbttn');
            //passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTRefillGeneral.init();
});
