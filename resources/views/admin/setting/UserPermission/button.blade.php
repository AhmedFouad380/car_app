<div class="dt-buttons flex-wrap">
    <!--begin::Filter-->
    <!--end::Filter-->
    <!--begin::Add user-->
    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
            data-bs-target="#kt_modal_add_user">
        <i class="bi bi-plus-circle-fill fs-2x"></i>
    </button>

    <!--end::Add user-->
    <button id="delete" class="btn btn-light-danger me-3 font-weight-bolder">
        <i class="bi bi-trash-fill fs-2x"></i>
    </button>

    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">اضافة جديده</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                              transform="rotate(-45 6 17.3137)" fill="black"/>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                              transform="rotate(45 7.41422 6)" fill="black"/>
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
                    <form id="" class="form" method="post" action="{{url('store-permission')}}">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7"
                             id="kt_modal_add_user_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}"
                             data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_add_user_header"
                             data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                             data-kt-scroll-offset="300px">

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">اسم الصلاحية</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="الاسم" value="{{old('title')}}" required/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid row">
                                    <label class="form-check-label col-6" for="flexSwitchDefault">
                                        طلب العملاء
                                    </label>

                                    <div class="col-4">
                                        <input class="form-check-input" name="is_client_order" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_client_order" type="checkbox"

                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid row">
                                    <label class="form-check-label col-6" for="flexSwitchDefault">
                                        التعاقدات
                                    </label>
                                    <div class="col-4">
                                        <input class="form-check-input" name="is_contracting" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_contracting" type="checkbox"

                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid row">
                                    <label class="form-check-label col-6" for="flexSwitchDefault">
                                        قائمة المشاريع
                                    </label>
                                    <div class="col-4">
                                        <input class="form-check-input" name="is_projects" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_projects" type="checkbox"

                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid row">
                                    <label class="form-check-label col-6" for="flexSwitchDefault">
                                        التقارير والاحصائيات
                                    </label>
                                    <div class="col-4">
                                        <input class="form-check-input" name="is_report" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_report" type="checkbox"

                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid row">
                                    <label class="form-check-label col-6" for="flexSwitchDefault">
                                        الحسابات المالية
                                    </label>
                                    <div class="col-4">
                                        <input class="form-check-input" name="is_financial" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_financial" type="checkbox"

                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid row">
                                    <label class="form-check-label col-6" for="flexSwitchDefault">
                                        لوحة التحكم
                                    </label>
                                    <div class="col-4">
                                        <input class="form-check-input" name="is_settings" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_settings" type="checkbox"

                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid row">
                                    <label class="form-check-label col-6" for="flexSwitchDefault">
                                        وقت المرحلة
                                    </label>
                                    <div class="col-4">
                                        <input class="form-check-input" name="is_progressTime" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_progressTime" type="checkbox"

                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->


                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">ألغاء
                            </button>
                            <button type="submit" class="btn btn-primary"
                                    data-kt-users-modal-action="submit">
                                <span class="indicator-label">حفظ</span>
                                <span class="indicator-progress">برجاء الانتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
    <!--end::Modal - Add task-->
</div>

<script type="text/javascript">

    $("#delete").on("click", function () {
        var dataList = [];
        $("input:checkbox:checked").each(function (index) {
            dataList.push($(this).val())
        })
        console.log(dataList);
        if (dataList.length > 0) {
            Swal.fire({
                title: "تحذير.هل انت متأكد؟!",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f64e60",
                confirmButtonText: "نعم",
                cancelButtonText: "لا",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then(function (result) {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '{{url("delete-permission")}}',
                        type: "get",
                        data: {'id': dataList, _token: CSRF_TOKEN},
                        dataType: "JSON",
                        success: function (data) {
                            if (data.message == "Success") {
                                $("input:checkbox:checked").parents("tr").remove();
                                Swal.fire("نجاح", "تم الحذف بنجاح", "success");
                                // location.reload();
                            } else {
                                Swal.fire("نأسف", "حدث خطأ ما اثناء الحذف", "error");
                            }
                        },
                        fail: function (xhrerrorThrown) {
                            Swal.fire("نأسف", "حدث خطأ ما اثناء الحذف", "error");
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    Swal.fire("ألغاء", "تم الالغاء", "error");
                }
            });
        }
    });
</script>

