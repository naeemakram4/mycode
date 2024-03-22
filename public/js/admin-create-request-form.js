"use strict";
var KTCreateAccount = function () {
    var e, t, i, o, s, r, a = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e),
                t = document.querySelector("#kt_create_account_stepper"),
                i = t.querySelector("#kt_create_account_form"),
                o = t.querySelector('[data-kt-stepper-action="submit"]'),
                s = t.querySelector('[data-kt-stepper-action="next"]'),
                (r = new KTStepper(t)).on("kt.stepper.changed", (function (e) {
                    3 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), s.classList.add("d-none")) :
                        4 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), s.classList.add("d-none")) :
                            (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), s.classList.remove("d-none"))
                })),
                r.on("kt.stepper.next", (function (e) {
                    console.log("stepper.next");
                    var t = a[e.getCurrentStepIndex() - 1];
                    t ? t.validate().then((function (t) {
                        console.log("validated!"),
                            "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {confirmButton: "btn btn-light"}
                            }).then((function () {
                                KTUtil.scrollTop()
                            }))
                    })) : (e.goNext(), KTUtil.scrollTop())
                })),
                r.on("kt.stepper.previous", (function (e) {
                    console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
                })), a.push(FormValidation.formValidation(i, {
                fields: {
                    request_client: {validators: {notEmpty: {message: "Please select client to generate request!"}}},
                    request_type: {validators: {notEmpty: {message: "Request type is required"}}}
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    request_subject: {validators: {notEmpty: {message: "Request subject is required"}}},
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), o.addEventListener("click", (function (e) {
                a[1].validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(),
                        o.disabled = !0,
                        o.setAttribute("data-kt-indicator", "on"),
                        setTimeout((function () {
                            o.removeAttribute("data-kt-indicator"),
                            o.disabled = !1,
                            i.submit(), // Form submitting!
                            r.goNext()
                        }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {confirmButton: "btn btn-light"}
                    }).then((function () {
                        KTUtil.scrollTop()
                    }))
                }))
            })), $(i.querySelector('[name="request_type"]')).on("change", (function () {
                a[0].revalidateField("request_type")
            })),
                $(i.querySelector('[name="request_client"]')).on("change", (function () {
                    a[0].revalidateField("request_client")
                }))
        },
    }
}();

KTUtil.onDOMContentLoaded((function () {
    KTCreateAccount.init()
}));
