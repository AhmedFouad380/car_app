@extends('admin.layouts.master-without-nav') 

@section('css')
@endsection

@section('breadcrumb')
@endsection

@section('content')
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column" id="kt_create_account_stepper">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-auto w-xl-500px bg-lighten shadow-sm bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-cover" style="background-image: url({{asset('admin/assets/media/illustrations/sketchy-1/16.png')}}">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px scroll-y">
            <!--begin::Header-->
            <div class="d-flex flex-row-fluid flex-column flex-center p-10 pt-lg-20">
                <!--begin::Logo-->
                <a href="../../demo16/dist/index.html" class="mb-10 mb-lg-20">
                    <img alt="Logo" src="{{asset('admin/assets/media/logos/logo-dark.png')}}" class="h-150px" />
                </a>
                <!--end::Logo-->
                <!--begin::Nav-->
                <div class="stepper-nav">
                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">1</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title text-dark">البيانات الاساسية</h3>
                            <div class="stepper-desc fw-bold">تفاصيل البيانات الاساسية</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 2-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">2</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">البيانات الاضافية</h3>
                            <div class="stepper-desc fw-bold">تفاصيل البيانات الاضافية</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 2-->
                    <!--begin::Step 3-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">3</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">تفاصيل المشروع</h3>
                            <div class="stepper-desc fw-bold">تفاصيل المشروع المبدئية</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 3-->
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Header-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--begin::Aside-->
    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid py-10 bg-white bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-cover" style="background-image: url({{asset('admin/assets/media/illustrations/sketchy-1/16.jpg')}}">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-700px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form action="{{ route('create_quest.submit') }}" method="post" class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                    
                    <!--begin::Step 1-->
                    <div class="current" data-kt-stepper-element="content">
                        @csrf
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                                <!--begin::Title-->
                                <h2 class="fw-bolder d-flex align-items-center text-dark">البيانات الاساسية
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->        
                            

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">اسـم الكريـم  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="ادخل اسـم الكريـم" value="" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">اسـم المشـروع  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="projectName" placeholder="ادخل اسـم المشـروع" value="" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">رقـم الجـوال</label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="row fv-row">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="phone" minlength="9" maxlength="9" placeholder="ادخل رقـم الجـوال" value="" autocomplete="nope" />
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-2">
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="966" value="966" readonly/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">البريـد الالكتـروني  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="email" placeholder="ادخل البريـد الالكتـروني" value="" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label required mb-3">الخدمـة المطلـوبة
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing"></i></label>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row mb-2" data-kt-buttons="true">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                                            <input type="radio" class="btn-check" name="services" checked="checked" value="تصميم" />
                                            <span class="fw-bolder fs-3">تصميم</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                            <input type="radio" class="btn-check" name="services" value="تصميم و إشراف" />
                                            <span class="fw-bolder fs-3">تصميم و إشراف</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Hint-->
                                <div class="form-text">اختر الخدمة التي تناسبك</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 2-->
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">البيانات الاضافية</h2>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label required">حـدد البلـد</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="country" id="country" onchange="myFunction()" onclick="myFunction()" class="form-select form-select-lg form-select-solid" data-placeholder="اختـر..." data-allow-clear="true" data-hide-search="true">
                                    <option value="داخل المملكة العربية السعودية">داخل المملكة العربية السعودية</option>
                                    <option value="خارج المملكة العربية السعودية">خارج المملكة العربية السعودية</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10" id="state">
                                <!--begin::Label-->
                                <label class="form-label required">اختـر المدينـة</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="state" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="اختـر..." data-allow-clear="true">
                                    <option></option>
                                    @foreach (\App\Models\State::get() as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">كيف تم الاستدلال علينا ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="know_us" type="radio" value="الانستجرام" id="flexRadioDefault"/>
                                        <label class="form-check-label" for="flexRadioDefault">
                                            الانستجرام
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="know_us" type="radio" value="تويتر" id="flexRadioDefault2"/>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            تويتر
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="know_us" type="radio" value="سناب شات" id="flexRadioDefault3"/>
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            سناب شات
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="know_us" type="radio" value="صديق" id="flexRadioDefault4"/>
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            صديق
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="know_us" type="radio" value="اخرى" id="flexRadioDefault5"/>
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            اخرى
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 2-->
                    <!--begin::Step 3-->
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">تفاصيل المشروع</h2>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label required">حـدد نوع المشروع</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="project_type" class="form-select form-select-lg form-select-solid" data-placeholder="اختـر..." data-allow-clear="true" data-hide-search="true">
                                    <option value="فيلا سكنية">فيلا سكنية</option>
                                    <option value="شاليه">شاليه</option>
                                    <option value="عمارة سكنية">عمارة سكنية</option>
                                    <option value="مدرسة">مدرسة</option>
                                    <option value="مكتب">مكتب</option>
                                    <option value="مطعم">مطعم</option>
                                    <option value="فندق">فندق</option>
                                    <option value="مسجد">مسجد</option>
                                    <option value="شركة">شركة</option>
                                    <option value="أخرى">أخرى</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label required mb-3">مساحة المشروع
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing"></i></label>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row mb-2" data-kt-buttons="true">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                                            <input type="radio" class="btn-check" name="area" checked="checked" value="اكبر من 250 م" />
                                            <span class="fw-bolder fs-3">اكبر من 250 م</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                            <input type="radio" class="btn-check" name="area" value="اكبر من 500 م" />
                                            <span class="fw-bolder fs-3">اكبر من 500 م</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Option-->
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                            <input type="radio" class="btn-check" name="area" value="اكبر من 1000 م" />
                                            <span class="fw-bolder fs-3">اكبر من 1000 م</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Hint-->
                                <div class="form-text">اختر الخدمة التي تناسبك</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ما هي الفترة المتوقعة المراد فيها استلام التصميم
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="duration" type="radio" value="من شهر إلى شهرين" id="flexRadioDefault6"/>
                                        <label class="form-check-label" for="flexRadioDefault6">
                                            من شهر إلى شهرين
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="duration" type="radio" value="من 3 أشهر إلى 6 أشهر" id="flexRadioDefault7"/>
                                        <label class="form-check-label" for="flexRadioDefault7">
                                            من 3 أشهر إلى 6 أشهر
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">نعمل في الخليل على دراسة توفير مخططات شخصية جاهزة للمنازل هل تفضل ذلك
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="plan" type="radio" value="نعم" id="flexRadioDefault8" checked/>
                                        <label class="form-check-label" for="flexRadioDefault8">
                                            نعم
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="plan" type="radio" value="لا" id="flexRadioDefault9"/>
                                        <label class="form-check-label" for="flexRadioDefault9">
                                            لا
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 3-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-15">
                        <div class="mr-2">
                            <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                            
                            <span class="svg-icon svg-icon-4 ms-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->السابق</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                <span class="indicator-label">تأكيد
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
                                        <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">التالي
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
                                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--></button>
                        </div>
                        
                    </div>
                    <!--end::Actions-->
                    
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
            <!--begin::Links-->
            <div class="d-flex flex-center fw-bold fs-6">
                <a href="#" class="text-muted text-hover-primary px-2" target="_blank">نبذه عنا</a>
                <a href="#" class="text-muted text-hover-primary px-2" target="_blank">الدعم الفني</a>
                <a href="#" class="text-muted text-hover-primary px-2" target="_blank">تسجيل الدخول</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Body-->
</div>
@endsection

@section('script')
    <script src="{{asset('admin/assets/js/custom/modals/create-account.js')}}"></script>
    <script>
        function myFunction() {
            var id =$('#country').val()
            if (id == "داخل المملكة العربية السعودية"){
                document.getElementById("state").style.display = "block";
            } else {
                document.getElementById("state").style.display = "none";
            }
        }
    </script>
@endsection



