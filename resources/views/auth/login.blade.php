@extends('admin.layouts.master-without-nav')

@section('css')
@endsection

@section('breadcrumb')
@endsection

@section('content')
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-cover" style="background-image: url({{asset('admin/assets/media/illustrations/sketchy-1/14-3.jpeg')}}">

    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">

        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="" method="post" action="{{url('login')}}">
                <!--begin::Heading-->@csrf
                <div class="text-center mb-10">
                    <!--begin::Logo-->
                    <a href="../../demo16/dist/index.html" class="mb-12">
                        <img alt="Logo" src="{{asset('admin/assets/media/logos/logo-dark.png')}}" class="h-150px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h1 class="text-danger mt-3">تسجيل الدخول</h1>
                    <!--end::Title-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label fs-6 fw-bolder text-dark">رقم الجوال</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" name="phone" type="number" autocomplete="off" />
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">كلمة المرور</label>
                        <!--end::Label-->
                        <!--begin::Link-->
                        <a href="/forget-password" class="link-danger fs-6 fw-bolder">نسيت كلمة المرور ؟</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                    <!--end::Input-->
                    <br>
                    <div class="mb-3 fv-row">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="flexRadioDefault121"/>
                            <label class="form-check-label" for="flexRadioDefault121">
                                تذكرني ؟
                            </label>
                        </div>
                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-danger w-100 mb-5">
                        <span class="indicator-label">دخول</span>
                        <span class="indicator-progress">انتظر لحظات...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Submit button-->
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>

</div>
@endsection

@section('script')
    <script src="{{asset('admin/assets/js/custom/authentication/sign-in/general.js')}}"></script>


    @if( session()->has("error"))
        <?php
        $e = session()->get("error");
        ?>

        <script>
            Swal.fire({
                icon: 'success',
                title: "نجاح.",
                text: "{{$e}} ",
                type: "success",
                timer: 5000,
                showConfirmButton: false
            });
        </script>

    @endif
@endsection

