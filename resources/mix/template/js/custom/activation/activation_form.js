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
                    'plan': {
                        validators: {
                            notEmpty: {
                                message: 'Plan is required!'
                            }
                        }
                    },
                    'sim_card_number': {
                        validators: {
                            notEmpty: {
                                message: 'Sim card number is required!'
                            }
                        }
                    },
                    'device_imei': {
                        validators: {
                            notEmpty: {
                                message: 'Device IMEI number is required!'
                            }
                        }
                    },
                    'customer_first_name': {
                        validators: {
                            notEmpty: {
                                message: 'First name is required!'
                            }
                        }
                    },
                    'customer_last_name': {
                        validators: {
                            notEmpty: {
                                message: 'Last name is required!'
                            }
                        }
                    },
                    'address': {
                        validators: {
                            notEmpty: {
                                message: 'Address is required!'
                            }
                        }
                    },
                    'city': {
                        validators: {
                            notEmpty: {
                                message: 'City is required!'
                            }
                        }
                    },
                    'state': {
                        validators: {
                            notEmpty: {
                                message: 'State is required!'
                            }
                        }
                    },
                    'zip_code': {
                        validators: {
                            notEmpty: {
                                message: 'ZipCode is required!'
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
                if (status === 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    var formData = new FormData(form);

                    // Simulate ajax request
                    axios.post(form.getAttribute('action'), formData)
                        .then(function (response) {
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "Activation request has been submitted successfully!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    form.querySelector('[name="plan"]').value = "";
                                    form.querySelector('[name="sim_card_number"]').value = "";
                                    form.querySelector('[name="device_imei"]').value = "";
                                    form.querySelector('[name="customer_first_name"]').value = "";
                                    form.querySelector('[name="customer_last_name"]').value = "";
                                    form.querySelector('[name="customer_email_address"]').value = "";
                                    form.querySelector('[name="address"]').value = "";
                                    form.querySelector('[name="city"]').value = "";
                                    form.querySelector('[name="state"]').value = "";
                                    form.querySelector('[name="zip_code"]').value = "";
                                    form.querySelector('[name="desired_area_code"]').value = "";

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
    }

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector('#activationForm');
            submitButton = document.querySelector('#submitBtn');
            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTRefillGeneral.init();
});
