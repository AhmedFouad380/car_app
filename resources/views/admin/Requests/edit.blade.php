@extends('admin.layouts.master')

@section('css')
    <link href="{{ URL::asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ URL::asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('style')

<style>
    .pac-container { z-index: 100000 !important; }
</style>
@endsection

@section('breadcrumb')
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">بيانات المشروع:  {{$data->name}}</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">طلبات العملاء الجدد</li>
        <li class="breadcrumb-item text-gray-500">بيانات المشروع</li>
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
                                                        <td class="text-gray-800"> {{$data->client->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted min-w-125px w-125px">تاريخ التقديم : </td>
                                                        <td class="text-gray-800">{{\Carbon\Carbon::parse($data->date)->format('Y-m-d H;i')}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted min-w-125px w-125px">رقم الهاتف : </td>
                                                        <td class="text-gray-800">{{$data->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted min-w-125px w-125px">نوع التعاقد</td>
                                                        @inject('Contract','App\Models\Contract')
                                                        <td class="text-gray-800">{{$Contract->find($data->projectContract->contract_id)->title}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted min-w-125px w-125px">الموقع</td>
                                                        <td class="text-gray-800">
                                                            <button type="button" class="btn btn-light-warring me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_location">                                                                <i class="bi bi-geo-alt-fill fs-2x"></i>
                                                            </button>

                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
{{--                                            <div class="flex-equal">--}}
{{--                                                <div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px"></div>--}}
{{--                                            </div>--}}
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
                                                <a href="{{url('quest2/'.$data->id.'/'.Auth::user()->id)}}"  target="_blank" class="btn btn-light-primary me-3 font-weight-bolder">
                                                    <i class="bi bi-eye fs-2x"></i> رؤية
                                                </a>

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
                                                <button data-id="{{$data->id}}" class=" AcceptProject btn btn-light-success me-3 font-weight-bolder">
                                                    <i class="bi bi-check-circle fs-2x"></i> قبـول
                                                </button>

                                                <button type="button" data-id="{{$data->id}}" class=" RejectProject btn btn-light-danger me-3">
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
                                        <th class="min-w-150px">بواسطة</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600">
                                    @foreach($explans as $Key => $exp)
                                    <tr>
                                        <td>{{$Key + 1}}</td>
                                        <td>{{$exp->comments}}</td>
                                        <td>{{$exp->time}} {{$exp->date}}</td>
                                        <td>{{$exp->emp_name}}</td>
                                        </tr>
                                        @endforeach
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
                    <div class="card card-flush pt-3 mb-0" >
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
                                    <span class="fw-bold text-gray-600">{{$data->client->name}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">اسـم المشـروع :</span>
                                    <span class="fw-bold text-gray-600">{{$data->name}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">رقـم الجـوال :</span>
                                    <span class="fw-bold text-gray-600">{{$data->phone}} </span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">البريـد الالكتـروني:</span>
                                    <span class="fw-bold text-gray-600">{{$data->email}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">الخدمـة المطلـوبة :</span>
                                    <span class="fw-bold text-gray-600"> {{$data->service}}</span>
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
                                    <span class="fw-bold text-gray-600"> {{$data->country}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2"> المدينة:</span>
                                    @inject('State','App\Models\State')
                                    <span class="fw-bold text-gray-600"> {{$State->find($data->state)->title}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">كيف تم الاستدلال علينا ؟ </span>
                                    <span class="fw-bold text-gray-600">{{$data->know_us}}</span>
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
                                    <span class="fw-bold text-gray-600">{{$data->project_type}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">مساحة المشروع:</span>
                                    <span class="fw-bold text-gray-600">{{$data->area}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">ما هي الفترة المتوقعة المراد فيها استلام التصميم:</span>
                                    <span class="fw-bold text-gray-600">{{$data->duration}}</span>
                                </div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2">نعمل في الخليل على دراسة توفير مخططات شخصية جاهزة للمنازل هل تفضل ذلك:</span>
                                    <span class="fw-bold text-gray-600">{{$data->plan}}</span>
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
            <div class="modal fade" id="kt_modal_edit_location" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="{{url('updateLocation')}}" method="post">
                            <!--begin::Modal header-->
                            @csrf
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">تحديد الموقع</h2>
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
                                    <span class="fw-bolder required">اختار الموقع</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Please select a subscription"></i>
                                </h3>
                                <!--end::Label-->
                                <!--begin::Scroll-->
                                <div class="scroll-y mh-300px me-n7 pe-7">
                                    <input type="text" id="search_input" placeholder=" أبحث  بالمكان او اضغط على الخريطه" />
                                    <input type="hidden" id="information"  />
                                    <div id="us1" style="width: 100%; height: 400px;"></div>
                                    <?php
                                    if(!empty($data->lat) && !empty($data->lng)){
                                        $lat = $data->lat;
                                        $lng = $data->lng;
                                    }else{
                                    $lat = !empty(old('lat')) ? old('lat') : '24.69670448385797';
                                    $lng = !empty(old('lng')) ? old('lng') : '46.690517596875';
                                    }
                                    ?>

                                    <input type="hidden" id="lat" name="lat" required value="{{$lat}}">
                                    <input type="hidden" id="lng" name="lng"  required value="{{$lng}}">
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                    <!--begin::Product-->
                                    <!--end::Input group-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">ألغاء
                                </button>                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_product_submit" class="btn btn-primary">
                                    <span class="indicator-label">حفظ</span>
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

            <!--begin::Modal - New Product-->
            <div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="{{url('Add_explan')}}" method="post">
                            @csrf
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">اصافة شرح</h2>
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
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Please select a subscription"></i>
                                </h3>
                                <!--end::Label-->
                                <!--begin::Scroll-->
                                <!--end::Scroll-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">العنوان</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text"  required class="form-control form-control-solid" placeholder="" name="title" />
                                </div>

                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">التفاصيل</span>
                                    </label>
                                    <!--end::Label-->
                                    <textarea rows="5" name="comments" required class="form-control"></textarea>
                                </div>


                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">اسم الموظف</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="hidden" name="project_id" value="{{$data->id}}">
                                    <input type="text" class="form-control form-control-solid" placeholder="" value="{{Auth::user()->name}}" name="emp_name" disabled />
                                </div>

                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">ألغاء
                                </button>                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_product_submit" class="btn btn-primary">
                                    <span class="indicator-label">حفظ</span>
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
                            <h2>تعديل بيانات العميل</h2>
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
                                        <span class="required">: اسم العميل</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text"  required class="form-control form-control-solid" placeholder="" value="{{$data->client->name}}" name="title" />
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">رقـم الجـوال :</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="number"  required class="form-control form-control-solid" placeholder="" value="{{$data->client->phone}}" name="phone" />
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">نوع العقد :</span>
                                    </label>
                                    <!--end::Label-->
                                    @inject('Contracts','App\Models\Contract')
                                    <select class="form-control" name="contract_id">
                                            @foreach($Contracts->all() as $con)
                                            <option value="{{$con->id}}" @if($con->id == $data->projectContract->contract_id) selected @endif > {{$con->title}} </option>
                                              @endforeach
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">ألغاء
                                    </button>
                                    <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                        <span class="indicator-label">حفظ</span>
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
    <script type="text/javascript"
            src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyAIcQUxj9rT_a3_5GhMp-i6xVqMrtasqws&language=ar'></script>
    <script src="{{asset('admin/locationpicker.jquery.js')}}"></script>


    <script>

        const myLatLng = { lat: -25.363, lng: 131.044 };

        $('#us1').locationpicker({
            location: {
                latitude: {{$lat}},
                longitude: {{$lng}}
            },
            position:myLatLng,
            radius: 300,
            markerIcon: "{{asset('admin/map-marker-2-xl.png')}}",
            inputBinding: {
                latitudeInput: $('#lat'),
                longitudeInput: $('#lng'),
                // radiusInput: $('#us2-radius'),
                // locationNameInput: $('#address'),
            }

        });
        if (document.getElementById('us1')) {
            var content;
            var latitude = {{!empty($data->lat) ? $data->lat: '24.69670448385797'}};
            var longitude = {{!empty($data->lng) ? $data->lng: '46.690517596875'}};
            var map;
            var marker;
            navigator.geolocation.getCurrentPosition(loadMap);

            function loadMap(location) {
                if (location.coords) {
                    latitude = location.coords.latitude;
                    longitude = location.coords.longitude;
                }
                var myLatlng = new google.maps.LatLng(latitude, longitude);
                var mapOptions = {
                    zoom: 8,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,

                };
                map = new google.maps.Map(document.getElementById("us1"), mapOptions);

                content = document.getElementById('information');
                google.maps.event.addListener(map, 'click', function(e) {
                    placeMarker(e.latLng);
                });

                var input = document.getElementById('search_input');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                var searchBox = new google.maps.places.SearchBox(input);

                google.maps.event.addListener(searchBox, 'places_changed', function() {
                    var places = searchBox.getPlaces();
                    placeMarker(places[0].geometry.location);
                });

                marker = new google.maps.Marker({
                    map: map
                });
            }
        }
        function placeMarker(location) {
            marker.setPosition(location);
            map.panTo(location);
            //map.setCenter(location)
            content.innerHTML = "Lat: " + location.lat() + " / Long: " + location.lng();
            $("#lat").val(location.lat());
            $("#lng").val(location.lng());
            google.maps.event.addListener(marker, 'click', function(e) {
                new google.maps.InfoWindow({
                    content: "Lat: " + location.lat() + " / Long: " + location.lng()
                }).open(map,marker);

            });
        }


    </script>

    <script>


        $(".AcceptProject").on("click", function () {
            var id=$(this).data('id')
            if (id) {
                Swal.fire({
                    title: "هل انت متاكد من قبول المشروع",
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
                            url: '{{url("AcceptProject")}}',
                            type: "get",
                            data: {'id': id},
                            dataType: "JSON",
                            success: function (data) {
                                if (data.message == "Success") {
                                    Swal.fire("نجح", "تمت قبول المشروع بنجاح", "success");
                                    setTimeout(reload, 5000)
                                    function reload() {
                                        window.location.href = "{{url('/Requests')}}"
                                    }
                                } else {
                                    Swal.fire("عفوا! ", "حدث خطأ", "error");
                                }
                            },
                            fail: function (xhrerrorThrown) {
                                Swal.fire("عفوا! ", "حدث خطأ", "error");
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire("عفوا!", "تم الغاء العملية", "error");
                    }
                });
            }
        });
        $(".RejectProject").on("click", function () {
            var id=$(this).data('id')
            if (id) {
                Swal.fire({
                    title: "هل انت متاكد من رفض المشروع",
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
                            url: '{{url("RejectProject")}}',
                            type: "get",
                            data: {'id': id, _token: CSRF_TOKEN},
                            dataType: "JSON",
                            success: function (data) {
                                if (data.message == "Success") {
                                    Swal.fire("نجح", "تمت رفض المشروع بنجاح", "success");
                                    setTimeout(reload, 5000)
                                    function reload() {
                                        window.location.href = "{{url('/Requests')}}"
                                    }
                                } else {
                                    Swal.fire("عفوا! ", "حدث خطأ", "error");
                                }
                            },
                            fail: function (xhrerrorThrown) {
                                Swal.fire("عفوا! ", "حدث خطأ", "error");
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire("عفوا!", "تم الغاء العملية", "error");
                    }
                });
            }
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

