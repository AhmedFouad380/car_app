"use strict";
var KTCreateAccount = function() {
    var e, t, i, o, s, r, a = [];
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), t = document.querySelector("#kt_create_account_stepper"), i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), s = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
                4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), s.classList.add("d-none")) : 5 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), s.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), s.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function(e) {
                console.log("stepper.next");
                var t = a[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "تـم",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function(e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "اسـم الكريـم مطلـوب *"
                            }
                        }
                    }, projectName: {
                        validators: {
                            notEmpty: {
                                message: "اسـم المشـروع مطلـوب *"
                            }
                        }
                    }, phone: {
                        validators: {
                            notEmpty: {
                                message: "رقـم الجـوال مطلـوب *"
                            },
                            digits: {
                                message: "رقم الجوال يحتوي على أرقام فقط"
                            },
                            stringLength: {
                                min: 9,
                                max: 9,
                                message: "رقم الجوال يجب ان يحتوي على 9 ارقام فقط"
                            }
                        }
                    },email: {
                        validators: {
                            notEmpty: {
                                message: "البريـد الالكتـروني مطلـوب *"
                            },
                            emailAddress: {
                                message: "هذا ليس عنوان بريد إلكتروني صالح"
                            }
                        }
                    }
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
                    country: {
                        validators: {
                            notEmpty: {
                                message: "تحديد المدينة مطلوب"
                            }
                        }
                    },know_us: {
                        validators: {
                            notEmpty: {
                                message: "تحديد الاستدلال مطلوب"
                            }
                        }
                    }
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
                    project_type: {
                        validators: {
                            notEmpty: {
                                message: "نوع المشروع مطلوب"
                            }
                        }
                    },duration: {
                        validators: {
                            notEmpty: {
                                message: "تحديد الفترة المتوقعة المراد فيها استلام التصميم مطلوب"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), o.addEventListener("click", (function(e) {
                a[2].validate().then((function(t) {
                    "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
                        o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext()
                    }), 2e3) ,$("#kt_create_account_form").submit()) : Swal.fire({
                        text: "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "تـم",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTCreateAccount.init()
}));