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
                <form action="{{ route('create_quest2.submit') }}" method="post" class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                    
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
                                <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="ادخل اسـم الكريـم" value="{{$project->client->name}}" readonly autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">اسـم المشـروع  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="projectName" placeholder="ادخل اسـم المشـروع" value="{{$project->name}}" readonly autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">رقـم الجـوال  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="phone" minlength="9" maxlength="9" placeholder="ادخل رقـم الجـوال" value="{{$project->phone}}" readonly autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">البريـد الالكتـروني  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="email" placeholder="ادخل البريـد الالكتـروني" value="{{$project->client->email}}" readonly autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">المدينة  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="state" placeholder="المدينة" value="{{$project->State->title}}" readonly autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">طريقة الوصول إلينا ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="know_us" placeholder="طريقة الوصول إلينا ؟" value="{{$project->know_us}}" readonly autocomplete="nope" />
                                <!--end::Input-->
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
                                <label class="form-label">العمر</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="age" class="form-select form-select-lg form-select-solid" data-placeholder="اختـر..." data-allow-clear="true" data-hide-search="true">
                                    <option value="{{$p_other->age}}">{{$p_other->age}}</option>
                                    <option value="بين ٢٠ و ٣٠ سنة">بين ٢٠ و ٣٠ سنة</option>
                                    <option value="بين ٣٠ و٤٠ سنة">بين ٣٠ و٤٠ سنة</option>
                                    <option value="بين ٤٠ و٥٠ سنة">بين ٤٠ و٥٠ سنة</option>
                                    <option value="فوق ٥٠ سنة">فوق ٥٠ سنة</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label">أوقات العمل</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="work_time" class="form-select form-select-lg form-select-solid" data-placeholder="اختـر..." data-allow-clear="true" data-hide-search="true">
                                    <option value="{{$p_other->work_time}}">{{$p_other->work_time}}</option>
                                    <option value="ثابت">ثابت</option>
                                    <option value="مناوبة">مناوبة</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label">ماهو نوع المشروع المراد تصميمه ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="project_type2" class="form-select form-select-lg form-select-solid" data-placeholder="اختـر..." data-allow-clear="true" data-hide-search="true">
                                    <option value="{{$p_other->project_type2}}">{{$p_other->project_type2}}</option>
                                    <option value="سكني">سكني</option>
                                    <option value="منتجع / شاليه">منتجع / شاليه</option>
                                    <option value="كوفي شوب / مطاعم">كوفي شوب / مطاعم</option>
                                    <option value="مشاريع تجارية أخرى">مشاريع تجارية أخرى</option>
                                </select>
                                <!--end::Input-->
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
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">عدد أفراد الاسرة والأعمار  :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="number" placeholder="عدد أفراد الاسرة والأعمار" value="{{$p_other->family_num}}" readonly autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">نوع المشروع المراد تصميمه
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="type" type="radio" value="سكن خاص" <?php if ($p_other->type  == 'سكن خاص' ) { echo 'checked' ;} ?> id="flexRadioDefault6"/>
                                        <label class="form-check-label" for="flexRadioDefault6">
                                            سكن خاص
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="type" type="radio" value="تجاري"  <?php if ($p_other->type  == 'تجاري' ) { echo 'checked' ;} ?> id="flexRadioDefault7"/>
                                        <label class="form-check-label" for="flexRadioDefault7">
                                            تجاري
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">هل أنت الآن تسكن في
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living" type="radio" value="مستأجر" <?php if ($p_other->living  == 'مستأجر' ) { echo 'checked' ;} ?> id="flexRadioDefault8"/>
                                        <label class="form-check-label" for="flexRadioDefault8">
                                            مستأجر
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living" type="radio" value="ملك"  <?php if ($p_other->living  == 'ملك' ) { echo 'checked' ;} ?> id="flexRadioDefault9"/>
                                        <label class="form-check-label" for="flexRadioDefault9">
                                            ملك
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ماهي أبرز الايجابيات في سكنك الحالي
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_features[]" type="checkbox" value="القرب من العمل أو العائلة" <?php if($p_other->living_features) { echo 'checked' ; } ?> id="flexRadioDefault10"/>
                                        <label class="form-check-label" for="flexRadioDefault10">
                                            القرب من العمل أو العائلة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_features[]" type="checkbox" value="الشراحية والتصميم الجميل" <?php if($p_other->living_features) { echo 'checked' ; } ?> id="flexRadioDefault11"/>
                                        <label class="form-check-label" for="flexRadioDefault11">
                                            الشراحية والتصميم الجميل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_features[]" type="checkbox" value="موقعه مميز بشكل عام" <?php if($p_other->living_features) { echo 'checked' ; } ?> id="flexRadioDefault12"/>
                                        <label class="form-check-label" for="flexRadioDefault12">
                                            موقعه مميز بشكل عام
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_features[]" type="checkbox" value="سعره مناسب" <?php if($p_other->living_features) { echo 'checked' ; } ?> id="flexRadioDefault13"/>
                                        <label class="form-check-label" for="flexRadioDefault13">
                                            سعره مناسب
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_features[]" type="checkbox" value="صالة معيشة رائعة" <?php if($p_other->living_features) { echo 'checked' ; } ?> id="flexRadioDefault14"/>
                                        <label class="form-check-label" for="flexRadioDefault14">
                                            صالة معيشة رائعة
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ماهي أبرز السلبيات في سكنك الحالي
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_negatives[]" type="checkbox" value="المساحة صغيرة لم تلبي احتياجاتي" <?php if($p_other->living_negatives) { echo 'checked' ; } ?> id="flexRadioDefault15"/>
                                        <label class="form-check-label" for="flexRadioDefault15">
                                            المساحة صغيرة لم تلبي احتياجاتي
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_negatives[]" type="checkbox" value="قديم ومتهالك" <?php if($p_other->living_negatives) { echo 'checked' ; } ?> id="flexRadioDefault16"/>
                                        <label class="form-check-label" for="flexRadioDefault16">
                                            قديم ومتهالك
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_negatives[]" type="checkbox" value="تصميم وتوزيع سيئ" <?php if($p_other->living_negatives) { echo 'checked' ; } ?> id="flexRadioDefault17"/>
                                        <label class="form-check-label" for="flexRadioDefault17">
                                            تصميم وتوزيع سيئ
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ماهو مدى انزعاجك من لعب الأطفال حولك ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="child_play" type="radio" value="انزعج جد" <?php if ($p_other->child_play  == 'انزعج جد' ) { echo 'checked' ;} ?> id="flexRadioDefault18"/>
                                        <label class="form-check-label" for="flexRadioDefault18">
                                            انزعج جد
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="child_play" type="radio" value="انزعج بعض الاوقات"  <?php if ($p_other->child_play  == 'انزعج بعض الاوقات' ) { echo 'checked' ;} ?> id="flexRadioDefault19"/>
                                        <label class="form-check-label" for="flexRadioDefault19">
                                            انزعج بعض الاوقات
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="child_play" type="radio" value="لا انزعج اطلاقا واحب لعبهم طوال الوقت"  <?php if ($p_other->child_play  == 'لا انزعج اطلاقا واحب لعبهم طوال الوقت' ) { echo 'checked' ;} ?> id="flexRadioDefault20"/>
                                        <label class="form-check-label" for="flexRadioDefault20">
                                            لا انزعج اطلاقا واحب لعبهم طوال الوقت
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">ماهي هوايتك الشخصية وهل ترغب بتخصيص مكان لها في التصميم ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="hobby" value="{{$p_other->hobby}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ماهي الوان الاضائة المحببة لك ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="light_color" type="radio" value="الاصفر" <?php if ($p_other->light_color  == 'الاصفر' ) { echo 'checked' ;} ?> id="flexRadioDefault88"/>
                                        <label class="form-check-label" for="flexRadioDefault88">
                                            الاصفر
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="light_color" type="radio" value="الابيض"  <?php if ($p_other->light_color  == 'الابيض' ) { echo 'checked' ;} ?> id="flexRadioDefault89"/>
                                        <label class="form-check-label" for="flexRadioDefault89">
                                            الابيض
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="light_color" type="radio" value="كلاهما"  <?php if ($p_other->light_color  == 'كلاهما' ) { echo 'checked' ;} ?> id="flexRadioDefault860"/>
                                        <label class="form-check-label" for="flexRadioDefault860">
                                            كلاهما
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">هل تجد صعوبة عن النوم وسرعة انتباه لادنى صوت ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="sleeping" type="radio" value="حساس جدا" <?php if ($p_other->sleeping  == 'حساس جدا' ) { echo 'checked' ;} ?> id="flexRadioDefault21"/>
                                        <label class="form-check-label" for="flexRadioDefault21">
                                            حساس جدا
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="sleeping" type="radio" value="متوسط"  <?php if ($p_other->sleeping  == 'متوسط' ) { echo 'checked' ;} ?> id="flexRadioDefault22"/>
                                        <label class="form-check-label" for="flexRadioDefault22">
                                            متوسط
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="sleeping" type="radio" value="اتعمق ولا اكترث"  <?php if ($p_other->sleeping  == 'اتعمق ولا اكترث' ) { echo 'checked' ;} ?> id="flexRadioDefault23"/>
                                        <label class="form-check-label" for="flexRadioDefault23">
                                            اتعمق ولا اكترث
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">في لقائنا القادم ان شاء الله سوف نسألك عن روتينك اليومي ومستقبل العيش لثلاثين سنة يساعدنا ذلك على توجيه محددات التصميم .
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="future" type="radio" value="فكرة جيدة" <?php if ($p_other->future  == 'فكرة جيدة' ) { echo 'checked' ;} ?> id="flexRadioDefault24"/>
                                        <label class="form-check-label" for="flexRadioDefault24">
                                            فكرة جيدة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="future" type="radio" value="متطلباتي واضحة ولا أحتاج لذلك"  <?php if ($p_other->future  == 'متطلباتي واضحة ولا أحتاج لذلك' ) { echo 'checked' ;} ?> id="flexRadioDefault25"/>
                                        <label class="form-check-label" for="flexRadioDefault25">
                                            متطلباتي واضحة ولا أحتاج لذلك
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="future" type="radio" value="أحتاج لشرح أكثر"  <?php if ($p_other->future  == 'أحتاج لشرح أكثر' ) { echo 'checked' ;} ?> id="flexRadioDefault26"/>
                                        <label class="form-check-label" for="flexRadioDefault26">
                                            أحتاج لشرح أكثر
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">عند السفر للسياحة ماذا تحب ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="travel[]" type="checkbox" value="شاطئ هادئ جميل" <?php if($p_other->travel) { echo 'checked' ; } ?> id="flexRadioDefault27"/>
                                        <label class="form-check-label" for="flexRadioDefault27">
                                            شاطئ هادئ جميل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="travel[]" type="checkbox" value="الاطلالات على جبال خضراء أو مدن جميلة" <?php if($p_other->travel) { echo 'checked' ; } ?> id="flexRadioDefault28"/>
                                        <label class="form-check-label" for="flexRadioDefault28">
                                            الاطلالات على جبال خضراء أو مدن جميلة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="travel[]" type="checkbox" value="الطبيعة" <?php if($p_other->travel) { echo 'checked' ; } ?> id="flexRadioDefault29"/>
                                        <label class="form-check-label" for="flexRadioDefault29">
                                            الطبيعة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="travel[]" type="checkbox" value="المراكز والتسوق والتكلنوجيا" <?php if($p_other->travel) { echo 'checked' ; } ?> id="flexRadioDefault30"/>
                                        <label class="form-check-label" for="flexRadioDefault30">
                                            المراكز والتسوق والتكلنوجيا
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="living_negatives[]" type="checkbox" value="الحضارات والمتاحف واساليب العيش" <?php if($p_other->living_negatives) { echo 'checked' ; } ?> id="flexRadioDefault31"/>
                                        <label class="form-check-label" for="flexRadioDefault31">
                                            الحضارات والمتاحف واساليب العيش
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">هل تسعد حينما تحضر الولائم الكبيرة ام تفضل عدم دعوتك لها ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="future" type="radio" value="اسعد و احبها كثيرا" <?php if ($p_other->future  == 'اسعد و احبها كثيرا' ) { echo 'checked' ;} ?> id="flexRadioDefault412"/>
                                        <label class="form-check-label" for="flexRadioDefault412">
                                            اسعد و احبها كثيرا
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="future" type="radio" value="احضرها ولا افضل دعوتي لها"  <?php if ($p_other->future  == 'احضرها ولا افضل دعوتي لها' ) { echo 'checked' ;} ?> id="flexRadioDefault413"/>
                                        <label class="form-check-label" for="flexRadioDefault413">
                                            احضرها ولا افضل دعوتي لها
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="future" type="radio" value="غالبا اعتذر عنها"  <?php if ($p_other->future  == 'غالبا اعتذر عنها' ) { echo 'checked' ;} ?> id="flexRadioDefault414"/>
                                        <label class="form-check-label" for="flexRadioDefault414">
                                            غالبا اعتذر عنها
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label required">كم عدد المناسبات الدورية الاسبوعية لديك ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="party" class="form-select form-select-lg form-select-solid" data-placeholder="اختـر..." data-allow-clear="true" data-hide-search="true">
                                    <option <?php if( $p_other->party == 0 ) {echo "selected"; } ?> value="">---</option>
                                    <option  <?php if( $p_other->party == 1 ) {echo "selected"; } ?> value="1">1</option>
                                    <option  <?php if( $p_other->party == 2 ) {echo "selected"; } ?> value="2">2</option>
                                    <option  <?php if( $p_other->party == 3 ) {echo "selected"; } ?> value="3">3</option>
                                    <option <?php if( $p_other->party == 4 ) {echo "selected"; } ?>  value="4">4</option>
                                    <option  <?php if( $p_other->party == 5 ) {echo "selected"; } ?> value="5">5</option>
                                    <option  <?php if( $p_other->party == 6 ) {echo "selected"; } ?>  value="6">6</option>
                                    <option  <?php if( $p_other->party == 7 ) {echo "selected"; } ?> value="7">7</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">في منزلك الحالي كم مرة تستقبل ضيوف في السنة ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="guests" type="radio" value="بين ١ و ٣" <?php if ($p_other->guests  == 'بين ١ و ٣' ) { echo 'checked' ;} ?> id="flexRadioDefault35"/>
                                        <label class="form-check-label" for="flexRadioDefault35">
                                            بين ١ و ٣
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="guests" type="radio" value="بين ٥ و ١٠"  <?php if ($p_other->guests  == 'بين ٥ و ١٠' ) { echo 'checked' ;} ?> id="flexRadioDefault36"/>
                                        <label class="form-check-label" for="flexRadioDefault36">
                                            بين ٥ و ١٠
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="guests" type="radio" value="بين ١٥ و ٢٥"  <?php if ($p_other->guests  == 'بين ١٥ و ٢٥' ) { echo 'checked' ;} ?> id="flexRadioDefault37"/>
                                        <label class="form-check-label" for="flexRadioDefault37">
                                            بين ١٥ و ٢٥
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="guests" type="radio" value="اكثر من ٣٠"  <?php if ($p_other->guests  == 'اكثر من ٣٠' ) { echo 'checked' ;} ?> id="flexRadioDefault38"/>
                                        <label class="form-check-label" for="flexRadioDefault38">
                                            اكثر من ٣٠
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">هل تقيم الولائم في ضيافتك أم غالبا قهوة وشاي ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="coffee" type="radio" value="اقيم الولائم غالبا"  <?php if ($p_other->coffee  == 'اقيم الولائم غالبا' ) { echo 'checked' ;} ?> id="flexRadioDefault39"/>
                                        <label class="form-check-label" for="flexRadioDefault39">
                                            اقيم الولائم غالبا
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="coffee" type="radio" value="ادعوهم للقهوة والشاي غالبا"  <?php if ($p_other->coffee  == 'ادعوهم للقهوة والشاي غالبا' ) { echo 'checked' ;} ?> id="flexRadioDefault40"/>
                                        <label class="form-check-label" for="flexRadioDefault40">
                                            ادعوهم للقهوة والشاي غالبا
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ما هو مقدار اهتمامك بالتفاصيل الدقيقة من ناحية الشكل ( مثلا هل تجذبك تفاصيل نقوش الحرم المكي ؟ )
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="details" type="radio" value="لااهتم"  <?php if ($p_other->details  == 'لااهتم' ) { echo 'checked' ;} ?> id="flexRadioDefault41"/>
                                        <label class="form-check-label" for="flexRadioDefault41">
                                            لااهتم
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="details" type="radio" value="قد اهتم حينما ينبهني احدهم"  <?php if ($p_other->details  == 'قد اهتم حينما ينبهني احدهم' ) { echo 'checked' ;} ?> id="flexRadioDefault42"/>
                                        <label class="form-check-label" for="flexRadioDefault42">
                                            قد اهتم حينما ينبهني احدهم
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="details" type="radio" value="مهتم جدا وتركيزي عالي بشكل مبالغ"  <?php if ($p_other->details  == 'مهتم جدا وتركيزي عالي بشكل مبالغ' ) { echo 'checked' ;} ?> id="flexRadioDefault43"/>
                                        <label class="form-check-label" for="flexRadioDefault43">
                                            مهتم جدا وتركيزي عالي بشكل مبالغ
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">في ثلاثية التصميم ( العملية - الجمال - الاقتصاد ) رقمها حسب الاهم لديك</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="designs" value="{{$p_other->designs}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ماهي الاعتبارات الرئيسية التي اتخذتها حين شرائك لهذه الأرض تحديدا ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="المساحة" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault44"/>
                                        <label class="form-check-label" for="flexRadioDefault44">
                                            المساحة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="اتساعها على الشارع" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault45"/>
                                        <label class="form-check-label" for="flexRadioDefault45">
                                            اتساعها على الشارع
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="وجهة الأرض" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault46"/>
                                        <label class="form-check-label" for="flexRadioDefault46">
                                            وجهة الأرض
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="كونها على شارعين" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault47"/>
                                        <label class="form-check-label" for="flexRadioDefault47">
                                            كونها على شارعين
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="قريبة من مكان عملي" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault48"/>
                                        <label class="form-check-label" for="flexRadioDefault48">
                                            قريبة من مكان عملي
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="قريبة من الاهل" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault49"/>
                                        <label class="form-check-label" for="flexRadioDefault49">
                                            قريبة من الاهل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="سعرها مناسب جدا" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault50"/>
                                        <label class="form-check-label" for="flexRadioDefault50">
                                            سعرها مناسب جدا
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_sell[]" type="checkbox" value="الجيران" <?php if($p_other->land_sell) { echo 'checked' ; } ?> id="flexRadioDefault51"/>
                                        <label class="form-check-label" for="flexRadioDefault51">
                                            الجيران
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">كم مساحة الأرض ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="land_area" value="{{$p_other->land_area}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">ماهي مقاسات الأرض ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="land_size" value="{{$p_other->land_size}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">ماهي اتجاهات الأرض ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="land_trends" value="{{$p_other->land_trends}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">موقع المشروع ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="land_location" value="{{$p_other->land_location}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ماهي الملحقات الملاصقة للأرض ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_nearby[]" type="checkbox" value="مسجد" <?php if($p_other->land_nearby) { echo 'checked' ; } ?> id="flexRadioDefault52"/>
                                        <label class="form-check-label" for="flexRadioDefault52">
                                            مسجد
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_nearby[]" type="checkbox" value="مواقف سيارات" <?php if($p_other->land_nearby) { echo 'checked' ; } ?> id="flexRadioDefault53"/>
                                        <label class="form-check-label" for="flexRadioDefault53">
                                            مواقف سيارات
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_nearby[]" type="checkbox" value="شارع تجاري" <?php if($p_other->land_nearby) { echo 'checked' ; } ?> id="flexRadioDefault54"/>
                                        <label class="form-check-label" for="flexRadioDefault54">
                                            شارع تجاري
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="land_nearby[]" type="checkbox" value="حديقة" <?php if($p_other->land_nearby) { echo 'checked' ; } ?> id="flexRadioDefault55"/>
                                        <label class="form-check-label" for="flexRadioDefault55">
                                            حديقة
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">ماهو الطراز المفضل لديك ؟
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_fav" type="radio" value="المودرن"  <?php if ($p_other->home_fav  == 'المودرن' ) { echo 'checked' ;} ?> id="flexRadioDefault56"/>
                                        <label class="form-check-label" for="flexRadioDefault56">
                                            المودرن
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_fav" type="radio" value="الكلاسيك"  <?php if ($p_other->home_fav  == 'الكلاسيك' ) { echo 'checked' ;} ?> id="flexRadioDefault57"/>
                                        <label class="form-check-label" for="flexRadioDefault57">
                                            الكلاسيك
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_fav" type="radio" value="النيوكلاسيك"  <?php if ($p_other->home_fav  == 'النيوكلاسيك' ) { echo 'checked' ;} ?> id="flexRadioDefault58"/>
                                        <label class="form-check-label" for="flexRadioDefault58">
                                            النيوكلاسيك
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_fav" type="radio" value="غير ذلك"  <?php if ($p_other->home_fav  == 'غير ذلك' ) { echo 'checked' ;} ?> id="flexRadioDefault59"/>
                                        <label class="form-check-label" for="flexRadioDefault59">
                                            غير ذلك
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">اختر متطلبات الدور الأرضي و قد لا تحتاج الى بعضها لذلك ضع علامة صح على متطلباتك فقط علما انه سيتم مناقشة هذه المتطلبات ومساحاتها في الاجتماع .
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="مجلس رجال" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault60"/>
                                        <label class="form-check-label" for="flexRadioDefault60">
                                            مجلس رجال
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="خدمات رجال ( حمام ومغاسل )" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault61"/>
                                        <label class="form-check-label" for="flexRadioDefault61">
                                            خدمات رجال ( حمام ومغاسل )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="مجلس نساء" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault62"/>
                                        <label class="form-check-label" for="flexRadioDefault62">
                                            مجلس نساء
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="خدمات مجلس النساء ( حمام ومغاسل )" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault63"/>
                                        <label class="form-check-label" for="flexRadioDefault63">
                                            خدمات مجلس النساء ( حمام ومغاسل )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="صالة طعام ضيوف" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault64"/>
                                        <label class="form-check-label" for="flexRadioDefault64">
                                            صالة طعام ضيوف
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="صالة كبيرة للاسرة" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault65"/>
                                        <label class="form-check-label" for="flexRadioDefault65">
                                            صالة كبيرة للاسرة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="خدمات الصالة ( حمام ومغاسل )" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault66"/>
                                        <label class="form-check-label" for="flexRadioDefault66">
                                            خدمات الصالة ( حمام ومغاسل )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="صالة معيشة صغيرة" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault67"/>
                                        <label class="form-check-label" for="flexRadioDefault67">
                                            صالة معيشة صغيرة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="صالة طعام للاسرة" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault68"/>
                                        <label class="form-check-label" for="flexRadioDefault68">
                                            صالة طعام للاسرة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="مطبخ" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault69"/>
                                        <label class="form-check-label" for="flexRadioDefault69">
                                            مطبخ
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="مستودع" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault70"/>
                                        <label class="form-check-label" for="flexRadioDefault70">
                                            مستودع
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="غرفة خادمة" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault71"/>
                                        <label class="form-check-label" for="flexRadioDefault71">
                                            غرفة خادمة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="مصعد" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault72"/>
                                        <label class="form-check-label" for="flexRadioDefault72">
                                            مصعد
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="الدرج يكون في الصاله ظاهر" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault73"/>
                                        <label class="form-check-label" for="flexRadioDefault73">
                                            الدرج يكون في الصاله ظاهر
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="الدرج يكون مخفي" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault74"/>
                                        <label class="form-check-label" for="flexRadioDefault74">
                                            الدرج يكون مخفي
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="مدخل للمستودع والمطبخ" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault75"/>
                                        <label class="form-check-label" for="flexRadioDefault75">
                                            مدخل للمستودع والمطبخ
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="درج خدمة" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault76"/>
                                        <label class="form-check-label" for="flexRadioDefault76">
                                            درج خدمة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="صالة العاب" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault77"/>
                                        <label class="form-check-label" for="flexRadioDefault77">
                                            صالة العاب
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="غرفة اضافية ( للخدمات المساندة - والدة - ضيوف - ... )" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault78"/>
                                        <label class="form-check-label" for="flexRadioDefault78">
                                            غرفة اضافية ( للخدمات المساندة - والدة - ضيوف - ... )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_serv[]" type="checkbox" value="مطبخ مفتوح" <?php if($p_other->home_serv) { echo 'checked' ; } ?> id="flexRadioDefault79"/>
                                        <label class="form-check-label" for="flexRadioDefault79">
                                            مطبخ مفتوح
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">اختر متطلبات الدور الأرضي و قد لا تحتاج الى بعضها لذلك ضع علامة صح على متطلباتك فقط علما انه سيتم مناقشة هذه المتطلبات ومساحاتها في الاجتماع .
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="غرفة رئيسية" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault80"/>
                                        <label class="form-check-label" for="flexRadioDefault80">
                                            غرفة رئيسية
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="جلسة داخل الغرفة الرئيسية منفصلة او متصلة ( يناقش لاحقا )" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault81"/>
                                        <label class="form-check-label" for="flexRadioDefault81">
                                            جلسة داخل الغرفة الرئيسية منفصلة او متصلة ( يناقش لاحقا )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="دوراة مياه كبيرة مع خدماتها" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault82"/>
                                        <label class="form-check-label" for="flexRadioDefault82">
                                            دوراة مياه كبيرة مع خدماتها
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="غرفة ملابس" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault83"/>
                                        <label class="form-check-label" for="flexRadioDefault83">
                                            غرفة ملابس
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="غرفة مكياج" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault84"/>
                                        <label class="form-check-label" for="flexRadioDefault84">
                                            غرفة مكياج
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="بلكونه فيها خصوصية بغرفة النوم" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault85"/>
                                        <label class="form-check-label" for="flexRadioDefault85">
                                            بلكونه فيها خصوصية بغرفة النوم
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="غرفة طفل جانبية صغيرة" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault86"/>
                                        <label class="form-check-label" for="flexRadioDefault86">
                                            غرفة طفل جانبية صغيرة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="صالة صغيرة مطلة على الدور الارضي" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault87"/>
                                        <label class="form-check-label" for="flexRadioDefault87">
                                            صالة صغيرة مطلة على الدور الارضي
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="صالة كبيرة" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault88"/>
                                        <label class="form-check-label" for="flexRadioDefault88">
                                            صالة كبيرة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="بوفيه صغير" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault89"/>
                                        <label class="form-check-label" for="flexRadioDefault89">
                                            بوفيه صغير
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="غرفة غسيل" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault90"/>
                                        <label class="form-check-label" for="flexRadioDefault90">
                                            غرفة غسيل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="بلكونة للصالة" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault91"/>
                                        <label class="form-check-label" for="flexRadioDefault91">
                                            بلكونة للصالة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_floor[]" type="checkbox" value="مكتب او مكتبة" <?php if($p_other->home_floor) { echo 'checked' ; } ?> id="flexRadioDefault92"/>
                                        <label class="form-check-label" for="flexRadioDefault92">
                                            مكتب او مكتبة
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">مكمل متطلبات غرف الدور الأول ( سجل كتابة رغبتك حول عدد الغرف الإضافية للأولاد )</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="home_com" value="{{$p_other->home_com}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">عدد دورات المياه لغرف الأولاد ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="build_area" value="{{$p_other->home_path}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">متطلبات الملحق العلوي ان وجد
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="غرفة غسيل" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault93"/>
                                        <label class="form-check-label" for="flexRadioDefault93">
                                            غرفة غسيل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="غرفة خادمة" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault94"/>
                                        <label class="form-check-label" for="flexRadioDefault94">
                                            غرفة خادمة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="صالة رياضة" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault95"/>
                                        <label class="form-check-label" for="flexRadioDefault95">
                                            صالة رياضة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="سينما" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault96"/>
                                        <label class="form-check-label" for="flexRadioDefault96">
                                            سينما
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="مرسم" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault97"/>
                                        <label class="form-check-label" for="flexRadioDefault97">
                                            مرسم
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="حمام ومغاسل" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault98"/>
                                        <label class="form-check-label" for="flexRadioDefault98">
                                            حمام ومغاسل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="مستودع" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault99"/>
                                        <label class="form-check-label" for="flexRadioDefault99">
                                            مستودع
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="شقة علوية" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault100"/>
                                        <label class="form-check-label" for="flexRadioDefault100">
                                            شقة علوية
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="home_roof[]" type="checkbox" value="صالة مطلة على السطح مع تزيين السطح" <?php if($p_other->home_roof) { echo 'checked' ; } ?> id="flexRadioDefault101"/>
                                        <label class="form-check-label" for="flexRadioDefault101">
                                            صالة مطلة على السطح مع تزيين السطح
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">في حال أردت شقة ماهي متطلبات الشقة؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="house" value="{{$p_other->house}}" autocomplete="nope" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">متطلبات البدروم إن وجد
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="غرفة الخادمة" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault102"/>
                                        <label class="form-check-label" for="flexRadioDefault102">
                                            غرفة الخادمة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="غرفة غسيل" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault103"/>
                                        <label class="form-check-label" for="flexRadioDefault103">
                                            غرفة غسيل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="سينما" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault104"/>
                                        <label class="form-check-label" for="flexRadioDefault104">
                                            سينما
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="مكتبة" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault105"/>
                                        <label class="form-check-label" for="flexRadioDefault105">
                                            مكتبة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="صالة رياضة" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault106"/>
                                        <label class="form-check-label" for="flexRadioDefault106">
                                            صالة رياضة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="ملحق ضيوف" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault107"/>
                                        <label class="form-check-label" for="flexRadioDefault107">
                                            ملحق ضيوف
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="مسبح" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault108"/>
                                        <label class="form-check-label" for="flexRadioDefault108">
                                            مسبح
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="شاور" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault109"/>
                                        <label class="form-check-label" for="flexRadioDefault109">
                                            شاور
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="ساونا" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault110"/>
                                        <label class="form-check-label" for="flexRadioDefault110">
                                            ساونا
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="بخار" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault111"/>
                                        <label class="form-check-label" for="flexRadioDefault111">
                                            بخار
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="جاكوزي" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault112"/>
                                        <label class="form-check-label" for="flexRadioDefault112">
                                            جاكوزي
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="صالة طعام" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault113"/>
                                        <label class="form-check-label" for="flexRadioDefault113">
                                            صالة طعام
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="بوفيه" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault114"/>
                                        <label class="form-check-label" for="flexRadioDefault114">
                                            بوفيه
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_bedrom[]" type="checkbox" value="حمام ومغاسل" <?php if($p_other->house_bedrom) { echo 'checked' ; } ?> id="flexRadioDefault115"/>
                                        <label class="form-check-label" for="flexRadioDefault115">
                                            حمام ومغاسل
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">الموقع العام والحديقة الخارجية
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="موقف سيارة" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault116"/>
                                        <label class="form-check-label" for="flexRadioDefault116">
                                            موقف سيارة
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="غرفة سائق" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault117"/>
                                        <label class="form-check-label" for="flexRadioDefault117">
                                            غرفة سائق
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="مستودع" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault118"/>
                                        <label class="form-check-label" for="flexRadioDefault118">
                                            مستودع
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="مسبح كبير مفتوح" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault119"/>
                                        <label class="form-check-label" for="flexRadioDefault119">
                                            مسبح كبير مفتوح
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="مسبح كبير مغلق" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault120"/>
                                        <label class="form-check-label" for="flexRadioDefault120">
                                            مسبح كبير مغلق
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="مسبح صغير" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault121"/>
                                        <label class="form-check-label" for="flexRadioDefault121">
                                            مسبح صغير
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="منطقة شواء" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault122"/>
                                        <label class="form-check-label" for="flexRadioDefault122">
                                            منطقة شواء
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="جلسة قريبة من المدخل" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault123"/>
                                        <label class="form-check-label" for="flexRadioDefault123">
                                            جلسة قريبة من المدخل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="مضمار مشي" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault124"/>
                                        <label class="form-check-label" for="flexRadioDefault124">
                                            مضمار مشي
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="مكان للزرع" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault125"/>
                                        <label class="form-check-label" for="flexRadioDefault125">
                                            مكان للزرع
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="مكان لعب الاطفال" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault126"/>
                                        <label class="form-check-label" for="flexRadioDefault126">
                                            مكان لعب الاطفال
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="تصميم حسب رأي المصمم" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault127"/>
                                        <label class="form-check-label" for="flexRadioDefault127">
                                            تصميم حسب رأي المصمم
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_garden[]" type="checkbox" value="ناقش معنا مساحة الخزان وموقعه وكذلك الصرف الصحي" <?php if($p_other->house_garden) { echo 'checked' ; } ?> id="flexRadioDefault128"/>
                                        <label class="form-check-label" for="flexRadioDefault128">
                                            ناقش معنا مساحة الخزان وموقعه وكذلك الصرف الصحي
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">الملحق الخارجي
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_out[]" type="checkbox" value="مجلس ضيوف" <?php if($p_other->house_out) { echo 'checked' ; } ?> id="flexRadioDefault129"/>
                                        <label class="form-check-label" for="flexRadioDefault129">
                                            مجلس ضيوف
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_out[]" type="checkbox" value="مشب" <?php if($p_other->house_out) { echo 'checked' ; } ?> id="flexRadioDefault130"/>
                                        <label class="form-check-label" for="flexRadioDefault130">
                                            مشب
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_out[]" type="checkbox" value="بوفيه" <?php if($p_other->house_out) { echo 'checked' ; } ?> id="flexRadioDefault131"/>
                                        <label class="form-check-label" for="flexRadioDefault131">
                                            بوفيه
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_out[]" type="checkbox" value="حمام ومغاسل" <?php if($p_other->house_out) { echo 'checked' ; } ?> id="flexRadioDefault132"/>
                                        <label class="form-check-label" for="flexRadioDefault132">
                                            حمام ومغاسل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_out[]" type="checkbox" value="صالة متعددة الاستخدام" <?php if($p_other->house_out) { echo 'checked' ; } ?> id="flexRadioDefault133"/>
                                        <label class="form-check-label" for="flexRadioDefault133">
                                            صالة متعددة الاستخدام
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_out[]" type="checkbox" value="غرفة نوم ضيوف مع ملحقاتها ( مدخل مستقل )" <?php if($p_other->house_out) { echo 'checked' ; } ?> id="flexRadioDefault134"/>
                                        <label class="form-check-label" for="flexRadioDefault134">
                                            غرفة نوم ضيوف مع ملحقاتها ( مدخل مستقل )
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-0 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center form-label mb-5">معلومات حول التصميم والخدمات الداخلية
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
                                <!--end::Label-->
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="أرغب بوجود حديقة داخلية ( ناقشها معنا واعرف سلبياتها وايجابياتها )" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault135"/>
                                        <label class="form-check-label" for="flexRadioDefault135">
                                            أرغب بوجود حديقة داخلية ( ناقشها معنا واعرف سلبياتها وايجابياتها )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="أحتاج إلى وجود مصعد أو تحديد مكانه على الاقل" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault136"/>
                                        <label class="form-check-label" for="flexRadioDefault136">
                                            أحتاج إلى وجود مصعد أو تحديد مكانه على الاقل
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="تكييف مركزي ( ناقشه معنا )" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault137"/>
                                        <label class="form-check-label" for="flexRadioDefault137">
                                            تكييف مركزي ( ناقشه معنا )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="تكييف سبيلت ( ناقشه معنا )" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault138"/>
                                        <label class="form-check-label" for="flexRadioDefault138">
                                            تكييف سبيلت ( ناقشه معنا )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="تكييف كوسيلت ( وحدات ) (قابل للمناقشة )" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault139"/>
                                        <label class="form-check-label" for="flexRadioDefault139">
                                            تكييف كوسيلت ( وحدات ) (قابل للمناقشة )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="اضافة تكييف مائي ( صحراوي )" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault140"/>
                                        <label class="form-check-label" for="flexRadioDefault140">
                                            اضافة تكييف مائي ( صحراوي )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="ارتفاع السقف عالي في الدور الأرضي ( جمال مع تكلفة اضافية ) نناقش الارتفاع المناسب" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault141"/>
                                        <label class="form-check-label" for="flexRadioDefault141">
                                            ارتفاع السقف عالي في الدور الأرضي ( جمال مع تكلفة اضافية ) نناقش الارتفاع المناسب
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="احتاج ارتفاع الابواب في الدور الارضي ( جمال مع تكلفة اضافية )" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault142"/>
                                        <label class="form-check-label" for="flexRadioDefault142">
                                            احتاج ارتفاع الابواب في الدور الارضي ( جمال مع تكلفة اضافية )
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" name="house_in[]" type="checkbox" value="احتاج زيادة حجم باب المدخل الرئيسي" <?php if($p_other->house_in) { echo 'checked' ; } ?> id="flexRadioDefault143"/>
                                        <label class="form-check-label" for="flexRadioDefault143">
                                            احتاج زيادة حجم باب المدخل الرئيسي
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label required mb-3">كم مسطح البناء المتوقع ؟</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid" name="build_area" value="{{$p_other->build_area}}" autocomplete="nope" />
                                <!--end::Input-->
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
    <script src="{{asset('admin/assets/js/custom/modals/quest2.js')}}"></script>
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



