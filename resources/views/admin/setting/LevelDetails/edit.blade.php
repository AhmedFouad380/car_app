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
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">تعديل مرحلة داخلية</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">اعدادات المراحل الداخلية</li>
        <li class="breadcrumb-item text-gray-500"> تعديل مرحلة داخلية
        </li>
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
                        <h3 class="fw-bolder m-0">تعديل مرحلة داخلية - <b>{{$permission->level->title}}</b></h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="" class="form" method="post" action="{{url('update-details-level')}}">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="card-body border-top p-9">

                            <!--begin::Input group-->
                            <div class="fv-row mb-7 row">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2 col-3">الاسم</label>
                                <!--end::Label-->
                                <div class="col-6">
                                    <!--begin::Input-->
                                    <input type="text" name="title"
                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                           placeholder="الاسم" value="{{$permission->title}}" required/>

                                    <input type="hidden" name="id" value="{{$permission->id}}" required>
                                    <input type="hidden" name="level_id" value="{{$permission->level_id}}"
                                           required>
                                    <!--end::Input-->
                                </div>

                            </div>

                            <div class="fv-row mb-7 row">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2 col-3">النسبة</label>
                                <!--end::Label-->
                                <div class="col-6">
                                    <!--begin::Input-->
                                    <input type="number" name="percent"
                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                           placeholder="النسبة" value="{{$permission->percent}}" max="100" required/>

                                </div>

                            </div>

                            <div class="fv-row mb-7 row">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2 col-3">الترتيب</label>
                                <!--end::Label-->
                                <div class="col-6">
                                    <!--begin::Input-->
                                    <input type="number" name="sort"
                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                           placeholder="الترتيب" value="{{$permission->sort}}" required/>

                                </div>

                            </div>
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid">
                                    <label class="form-check-label" for="flexSwitchDefault">يتطلب مرفق</label>
                                    <input class="form-check-input" name="is_pdf" type="hidden"
                                           value="0" id="flexSwitchDefault"/>
                                    <input
                                        class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                        name="is_pdf" type="checkbox"
                                        value="1" id="flexSwitchDefault" checked/>
                                </div>
                            </div>
                            @if($level =\App\Models\Level::whereId($permission->level_id)->first())
                                @if($level->type == 2)
                                    <div class="fv-row mb-7 row">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2 col-3">نوع السؤال</label>
                                        <!--end::Label-->
                                        <div class="col-6">
                                            <!--begin::Input-->
                                            <select class="form-control form-control-solid mb-3 mb-lg-0"
                                                    name="question_type" aria-label="" required id="question_type">
                                                <option value="">اختر نوع السؤال</option>
                                                <option @if($permission->question_type == 1) selected @endif value="1">
                                                    كتابة نص
                                                </option>
                                                <option @if($permission->question_type == 2) selected @endif value="2">
                                                    اختياري
                                                </option>
                                                <option @if($permission->question_type == 3) selected @endif value="3">
                                                    اختياري متعدد
                                                </option>
                                                <option @if($permission->question_type == 4) selected @endif value="4">
                                                    صورة
                                                </option>
                                                <option @if($permission->question_type == 5) selected @endif value="5">
                                                    اختياري نص
                                                </option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="fv-row mb-7 " id="questions"
                                         @if($permission->question_type == 1 ||$permission->question_type == 4 ) style="display: none" @endif>
                                        <!--begin::Label-->
                                        <!--begin::Label-->
                                        <div class="col-3">
                                            <button type="button" id="add-question"
                                                    class="btn btn-light-primary me-3">
                                                <i class="bi bi-plus-circle-fill fs-2x"></i>
                                            </button>
                                        </div>

                                        @foreach(json_decode($permission->values) as $key=> $value)
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for=""> السؤال {{$key+1}}</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="values[]"
                                                           class="form-control col-6 form-control-solid mb-3 mb-lg-0 value_question"
                                                           placeholder="السؤال" value="{{$value}}"/>
                                                </div>
                                                @if($key != 0)
                                                    <div class="col-3">
                                                        <button type="button"
                                                                class="btn btn-light-danger me-3 delete_question">
                                                            <i class="bi bi-trash-fill fs-2x fs-2x"></i>
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>

                                @endif

                            @endif


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
        $("#question_type").on("change", function () {
            var question_type = $(this).val();
            if (question_type == 2 || question_type == 3 || question_type == 5) {
                document.getElementById("questions").style.display = "block";
            } else {
                document.getElementById("questions").style.display = "none";
            }

        });
        $("#add-question").on("click", function () {
            $("#questions").append('<div class="row">' +
                '                                            <div class="col-3">' +
                '                                             </div>' +
                '                                            <div class="col-6">' +
                '                                                <input type="text" name="values[]"' +
                '                                                       class="form-control col-6 form-control-solid mb-3 mb-lg-0"' +
                '                                                       placeholder="السؤال"/>' +
                '                                            </div>' +
                '                                            <div class="col-3">' +
                '                                                     <button type="button"' +
                '                                                        class="btn btn-light-danger me-3 delete_question">' +
                '                                                    <i class="bi bi-trash-fill fs-2x fs-2x"></i>' +
                '                                                </button>' +
                '                                             </div>' +
                '                                        </div>');
        });
        $(document).on('click', '.delete_question', function () {
            $(this).parent().parent().remove();
        });
    </script>

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

