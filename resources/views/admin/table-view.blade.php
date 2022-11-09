@extends('admin.layouts.master')

@section('css')
    <link href="{{ URL::asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ URL::asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('style')
@endsection

@section('breadcrumb')
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">الاعدادات</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">الموظفين والادوار</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">

                <!--begin::Customer-->
                <!--begin::Payment method-->
                <div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bolder">بيانات المشروع</h2>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">تعديل البيانات</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Options-->
                        <div id="kt_create_new_payment_method">
                            <!--begin::Option-->
                            <div class="py-1">
                                <!--begin::Header-->
                                <div class="py-3 d-flex flex-stack flex-wrap">
                                    <!--begin::Toggle-->
                                    <div class="d-flex align-items-center collapsible toggle" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_1">
                                        <!--begin::Arrow-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Arrow-->
                                        <!--begin::Logo-->
                                        <img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
                                        <!--end::Logo-->
                                        <!--begin::Summary-->
                                        <div class="me-3">
                                            <div class="d-flex align-items-center fw-bolder">بيانات العميل 
                                            <div class="badge badge-light-primary ms-5"></div></div>
                                            <div class="text-muted"></div>
                                        </div>
                                        <!--end::Summary-->
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Input-->
                                    <div class="d-flex my-3 ms-9">
                                    </div>
                                   <!--end::Input-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div id="kt_create_new_payment_method_1" class="collapse show fs-6 ps-10">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap py-5">
                                        <!--begin::Col-->
                                        <div class="flex-equal me-5">
                                            <table class="table table-flush fw-bold gy-1">
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">اسم العميل : </td>
                                                    <td class="text-gray-800"> طارق محمد عبده</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">تاريخ التقديم : </td>
                                                    <td class="text-gray-800">2021 - 12 - 09</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">رقم الهاتف : </td>
                                                    <td class="text-gray-800">96655234567890</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">نوع التعاقد</td>
                                                    <td class="text-gray-800">Defult</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">الموقع</td>
                                                    <td class="text-gray-800">
                                                        <button type="button" class="btn btn-light-warring me-3">
                                                            <i class="bi bi-geo-alt-fill fs-2x"></i>
                                                        </button> 
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="flex-equal">
                                            <div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Option-->
                            <div class="separator separator-dashed"></div>
                            <!--begin::Option-->
                            <div class="py-1">
                                <!--begin::Header-->
                                <div class="py-3 d-flex flex-stack flex-wrap">
                                    <!--begin::Toggle-->
                                    <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_2">
                                        <!--begin::Arrow-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Arrow-->
                                        <!--begin::Logo-->
                                        <img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="" />
                                        <!--end::Logo-->
                                        <!--begin::Summary-->
                                        <div class="me-3">
                                            <div class="d-flex align-items-center fw-bolder">استبيان المشاريع</div>
                                            <div class="text-muted"></div>
                                        </div>
                                        <!--end::Summary-->
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Input-->
                                    <div class="d-flex my-3 ms-9">
                                     </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div id="kt_create_new_payment_method_2" class="collapse fs-6 ps-10">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap py-5">
                                        <!--begin::Col-->
                                        <div class="flex-equal me-5">
                                            <button class="btn btn-light-primary me-3 font-weight-bolder">
                                                <i class="bi bi-eye fs-2x"></i> رؤية
                                            </button>

                                            <button type="button" class="btn btn-light-danger me-3">
                                            <i class="bi bi-envelope fs-2x"></i> ارسال
                                            </button>                                            
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="flex-equal">
                                            
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Option-->
                            <div class="separator separator-dashed"></div>
                            <!--begin::Option-->
                            <div class="py-1">
                                <!--begin::Header-->
                                <div class="py-3 d-flex flex-stack flex-wrap">
                                    <!--begin::Toggle-->
                                    <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_3">
                                        <!--begin::Arrow-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Arrow-->
                                        <!--begin::Logo-->
                                        <img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
                                        <!--end::Logo-->
                                        <!--begin::Summary-->
                                        <div class="me-3">
                                            <div class="d-flex align-items-center fw-bolder">الموافقه على المشروع ؟
                                            <div class="badge badge-light-danger ms-5"></div></div>
                                            <div class="text-muted"></div>
                                        </div>
                                        <!--end::Summary-->
                                    </div>
                                    <!--end::Toggle-->
                                    <!--begin::Input-->
                                    <div class="d-flex my-3 ms-9">
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div id="kt_create_new_payment_method_3" class="collapse fs-6 ps-10">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap py-5">
                                        <!--begin::Col-->
                                        <div class="flex-equal me-5">
                                            <button class="btn btn-light-success me-3 font-weight-bolder">
                                                <i class="bi bi-check-circle fs-2x"></i> قبـول
                                            </button>

                                            <button type="button" class="btn btn-light-danger me-3">
                                            <i class="bi bi-x-octagon fs-2x"></i> رفـض
                                            </button>  
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="flex-equal">

                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Option-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Payment method-->
                <!--end::Customer-->
                <!--begin::Pricing-->
                <div class="card card-flush pt-3 mb-5 mb-lg-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bolder">الشروحات</h2>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_product">اضافة شرح</button>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 fw-bold gy-4" id="kt_subscription_products_table">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-100px">#</th>
                                        <th class="min-w-300px">البيان</th>
                                        <th class="min-w-150px">التاريخ</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600">
                                    <tr>
                                        <td>1</td>
                                        <td>تم التقديم عن طريق التطبيق</td>
                                        <td>1-1-2021</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>تم التقديم عن طريق التطبيق</td>
                                        <td>1-1-2021</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>تم التقديم عن طريق التطبيق</td>
                                        <td>1-1-2021</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>تم التقديم عن طريق التطبيق</td>
                                        <td>1-1-2021</td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Pricing-->

            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-350px mb-10 order-1 order-lg-2">
                <!--begin::Card-->
                <div class="card card-flush pt-3 mb-0">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>الاستبيان المبدئي</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 fs-6">
                        <!--begin::Section-->
                        <div class="mb-7">
                            <!--begin::Title-->
                            <h5 class="mb-3">البيانات الاساسية</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="d-flex align-items-center mb-1">
                                 <span class="me-2">اسـم الكريـم :</span>
                                 <span class="fw-bold text-gray-600">مشروع مشروع</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">اسـم المشـروع :</span>
                                <span class="fw-bold text-gray-600">مشروع مشروع</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">رقـم الجـوال :</span>
                                <span class="fw-bold text-gray-600">966552215454 </span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">البريـد الالكتـروني:</span>
                                <span class="fw-bold text-gray-600">tatgff@gmail.com</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">الخدمـة المطلـوبة :</span>
                                <span class="fw-bold text-gray-600"> تصميم واشراف</span> 
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Section-->
                        <div class="mb-7">
                            <!--begin::Title-->
                            <h5 class="mb-3">البيانات الاضافية</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">البلـد:</span>
                                <span class="fw-bold text-gray-600"> داخل السعودية</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2"> المدينة:</span>
                                <span class="fw-bold text-gray-600"> الرياض</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">كيف تم الاستدلال علينا ؟ </span>
                                <span class="fw-bold text-gray-600">تويتر</span> 
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Section-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <h5 class="mb-3">تفاصيل المشروع</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">نوع المشروع:</span>
                                <span class="fw-bold text-gray-600">فيلا</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">مساحة المشروع:</span>
                                <span class="fw-bold text-gray-600">اكبر من 250م</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">ما هي الفترة المتوقعة المراد فيها استلام التصميم:</span>
                                <span class="fw-bold text-gray-600">من شهر إلى شهرين</span> 
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="me-2">نعمل في الخليل على دراسة توفير مخططات شخصية جاهزة للمنازل هل تفضل ذلك:</span>
                                <span class="fw-bold text-gray-600">نعم</span> 
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
        <!--begin::Modals-->

        <!--begin::Modal - New Product-->
        <div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="#" id="kt_modal_add_product_form">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add a Product</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Label-->
                            <h3 class="mb-7">
                                <span class="fw-bolder required">Select Subscription</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Please select a subscription"></i>
                            </h3>
                            <!--end::Label-->
                            <!--begin::Scroll-->
                            <div class="scroll-y mh-300px me-n7 pe-7">
                                <!--begin::Product-->
                                <div class="fv-row">
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" checked="checked" data-kt-product-name="Basic" data-kt-product-price="15.99" data-kt-product-frequency="Month" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Basic</span>
                                            <span class="text-gray-400 fw-bold fs-6">Basic subscription</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$15.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Basic Bundle" data-kt-product-price="149.99" data-kt-product-frequency="Year" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Basic Bundle</span>
                                            <span class="text-gray-400 fw-bold fs-6">Basic yearly bundle</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$149.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams" data-kt-product-price="20.99" data-kt-product-frequency="Month" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Teams</span>
                                            <span class="text-gray-400 fw-bold fs-6">Teams subscription</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$20.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams Bundle" data-kt-product-price="199.99" data-kt-product-frequency="Year" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Teams Bundle</span>
                                            <span class="text-gray-400 fw-bold fs-6">Teams yearly bundle</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$199.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate" data-kt-product-price="224.99" data-kt-product-frequency="Month" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Corporate</span>
                                            <span class="text-gray-400 fw-bold fs-6">Corporate subscription</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$224.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate Bundle" data-kt-product-price="1249.99" data-kt-product-frequency="Year" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Corporate Bundle</span>
                                            <span class="text-gray-400 fw-bold fs-6">Corporate yearly bundle</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$1249.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise" data-kt-product-price="224.99" data-kt-product-frequency="Month" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Enterprise</span>
                                            <span class="text-gray-400 fw-bold fs-6">Enterprise subscription</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$224.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                    <!--begin::Subscription-->
                                    <label class="d-flex align-items-center mb-5">
                                        <!--begin::Radio-->
                                        <span class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise Bundle" data-kt-product-price="2249.99" data-kt-product-frequency="Year" />
                                        </span>
                                        <!--end::Radio-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column me-3">
                                            <span class="fw-bolder">Enterprise Bundle</span>
                                            <span class="text-gray-400 fw-bold fs-6">Enterprise yearly bundle</span>
                                        </span>
                                        <!--end::Description-->
                                        <!--begin::Pricing-->
                                        <span class="fw-bolder ms-auto">$2249.99 /
                                        <span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                        <!--end::Pricing-->
                                    </label>
                                    <!--end::Subscription-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="reset" id="kt_modal_add_product_cancel" class="btn btn-light me-3">Discard</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="button" id="kt_modal_add_product_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Modal - New Product-->
        <!--begin::Modal - New Card-->
        <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Add New Card</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                        <form id="kt_modal_new_card_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">Name On Card</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                    <!--end::Input-->
                                    <!--begin::Card logos-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                        <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                    </div>
                                    <!--end::Card logos-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="row fv-row">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                <option></option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">CVV</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                        <!--end::Input-->
                                        <!--begin::CVV icon-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                            <span class="svg-icon svg-icon-2hx">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M22 7H2V11H22V7Z" fill="black" />
                                                    <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::CVV icon-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="me-5">
                                    <label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
                                    <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    <span class="form-check-label fw-bold text-muted">Save Card</span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center pt-15">
                                <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                                <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
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
        <!--end::Modal - New Card-->
        <!--end::Modals-->
    </div>
    <!--end::Post-->
</div>
@endsection

@section('script')
    <script src="{{ URL::asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/js/custom/widgets.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            var table = $('#users_table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                aaSorting: [],
                "dom": "<'card-header border-0 p-0 pt-6'<'card-title' <'d-flex align-items-center position-relative my-1'f> r> <'card-toolbar' <'d-flex justify-content-end add_button'B> r>>  <'row'l r> <''t><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
                 lengthMenu: [[10, 25, 50, 100, 250, -1], [10, 25, 50, 100, 250, "الكل"]],
                "language": {
                    search: '<i class="fa fa-eye" aria-hidden="true"></i>',
                    searchPlaceholder: 'بحث سريع',
                    "url": "{{ url('admin/assets/ar.json') }}"
                },
                buttons: [
                    {extend: 'print', className: 'btn btn-light-primary me-3', text: '<i class="bi bi-printer-fill fs-2x"></i>'},
                    // {extend: 'pdf', className: 'btn btn-raised btn-danger', text: 'PDF'},
                    {extend: 'excel', className: 'btn btn-light-primary me-3', text: '<i class="bi bi-file-earmark-spreadsheet-fill fs-2x"></i>'},
                    // {extend: 'colvis', className: 'btn secondary', text: 'إظهار / إخفاء الأعمدة '}

                ],
                ajax: {
                    url: '{{ route('employee.datatable.data') }}',
                    data: {
                        @if(Request::get('users_group'))
                        users_group: {{ Request::get('users_group') }}
                        ,
                        @endif
                            @if(Request::get('jop_type'))
                        jop_type:{{Request::get('jop_type') }}
                        @endif
                    }
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox', "searchable": false, "orderable": false},
                    {data: 'name', name: 'name', "searchable": true, "orderable": true},
                    {data: 'jop_type', name: 'jop_type', "searchable": true, "orderable": true},
                    {data: 'users_group', name: 'users_group', "searchable": true, "orderable": true},
                    {data: 'is_active', name: 'is_active', "searchable": true, "orderable": true},
                    {data: 'actions', name: 'actions', "searchable": false, "orderable": false},

                ]
            });

            $.ajax({
                url: "{{ URL::to('/add-button')}}",
                success: function (data) { $('.add_button').append(data); },
                dataType: 'html'
            });
        });
    </script>


    <?php
    $message = session()->get("message");
    ?>

    @if( session()->has("message"))
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("نجاح", "{{$message}}");
        </script>

    @endif
@endsection

