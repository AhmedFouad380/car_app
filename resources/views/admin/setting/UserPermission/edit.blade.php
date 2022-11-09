@extends('admin.layouts.master')

@section('css')
@endsection

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
        }
    </style>
@endsection

@section('breadcrumb')
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">تعديل بيانات موظف</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">الدخول والصلاحيات</li>
        <li class="breadcrumb-item text-gray-500">تعديل صلاحية</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        @include('admin.setting.kt_aside')

        <div class="content flex-row-fluid" id="kt_content">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">تعديل بيانات صلاحية</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="" class="form" method="post" action="{{url('update-permission')}}">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="card-body border-top p-9">

                            <!--begin::Input group-->
                            <div class="fv-row mb-7 row">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2 col-3">اسم الصلاحية</label>
                                <!--end::Label-->
                                <div class="col-6">
                                    <!--begin::Input-->
                                    <input type="text" name="title"
                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                           placeholder="الاسم" value="{{$permission->title}}" required/>

                                    <input type="hidden" name="id" value="{{$permission->id}}" required>
                                    <!--end::Input-->
                                </div>
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

                                            value="1" id="flexSwitchDefault" @if($permission->is_client_order) checked @endif/>
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

                                            value="1" id="flexSwitchDefault" @if($permission->is_contracting) checked @endif/>
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

                                            value="1" id="flexSwitchDefault" @if($permission->is_projects) checked @endif/>
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

                                            value="1" id="flexSwitchDefault" @if($permission->is_report) checked @endif/>
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

                                            value="1" id="flexSwitchDefault" @if($permission->is_financial) checked @endif/>
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

                                            value="1" id="flexSwitchDefault"  @if($permission->is_settings) checked @endif/>
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

                                            value="1" id="flexSwitchDefault" @if($permission->is_progressTime) checked @endif/>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->


                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">حفظ
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->

        </div>
        <!--end::Post-->
    </div>
@endsection

@section('script')

    <script>
        $("#state").change(function () {
            var wahda = $(this).val();

            if (wahda != '') {
                $.get("{{ URL::to('/get-branch')}}" + '/' + wahda, function ($data) {
                    var outs = "";
                    $.each($data, function (title, id) {
                        console.log(title)
                        outs += '<option value="' + id + '">' + title + '</option>'
                    });
                    $('#branche').html(outs);
                });
            }
        });
    </script>



@endsection

