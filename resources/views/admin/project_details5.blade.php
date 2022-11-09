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
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">تفاصيل المشروع</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>
        <!--end::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/projects') }}" class="text-gray-600 text-hover-primary">المشاريع</a>
        </li>
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">تفاصيل المشروع</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Navbar-->
        <div class="card mb-6 mb-xl-9">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                    <!--begin::Image-->
                    <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                        <img class="mw-50px mw-lg-75px" src="{{ URL::asset('admin/assets/media/svg/brand-logos/volicity-9.svg')}}" alt="image" />
                    </div>
                    <!--end::Image-->
                    <!--begin::Wrapper-->
                    <div class="flex-grow-1">
                        <!--begin::Head-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::Details-->
                            <div class="d-flex flex-column">
                                <!--begin::Status-->
                                <div class="d-flex align-items-center mb-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">مشروع فيلا الساحل</a>
                                    <span class="badge badge-light-success me-auto">عقد قياسي </span>
                                </div>
                                <!--end::Status-->
                                <!--begin::Description-->
                                <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">اسم مالك المشروع</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap justify-content-start">
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <div class="fs-4 fw-bolder">29 Jan, 2021</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">تاريخ بداية العقد</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <div class="fs-4 fw-bolder">29 Jan, 2021</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">تاريخ نهاية العقد</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="SAR">0</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">اجمالي مبلغ التعاقد</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover mb-3">
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                    <img alt="Pic" src="{{ URL::asset('admin/assets/media/avatars/150-12.jpg')}}" />
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                    <img alt="Pic" src="{{ URL::asset('admin/assets/media/avatars/150-13.jpg')}}" />
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                    <img alt="Pic" src="{{ URL::asset('admin/assets/media/avatars/150-5.jpg')}}" />
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                    <img alt="Pic" src="{{ URL::asset('admin/assets/media/avatars/150-3.jpg')}}" />
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                    <img alt="Pic" src="{{ URL::asset('admin/assets/media/avatars/150-7.jpg')}}" />
                                </div>
                                <!--end::User-->
                                <!--begin::All users-->
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover" title="رؤية العاملين على المشروع">+</span>
                                </a>
                                <!--end::All users-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Details-->
                <div class="separator"></div>
                <!--begin::Nav wrapper-->
                <div class="d-flex overflow-auto h-55px">
                    <!--begin::Nav links-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="#">مراحل المشروع</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="#">بيانات المشروع</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="#">العاملين على المشروع</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="#">المحادثات</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="#">ملفات المشروع</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6 active" href="#">الشروحات</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="#">الاعدادات</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--end::Nav links-->
                </div>
                <!--end::Nav wrapper-->
            </div>
        </div>
        <!--end::Navbar-->

        <!--begin::Row-->
        <div class="row g-6 g-xl-9">
            <div class="card mb-5">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">الشروحات</span>
                        <span class="text-muted mt-1 fw-bold fs-7"></span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-danger me-5">
                            اضافة جديده
                        </a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="min-w-30px">م</th>
                                    <th class="min-w-300px">البيان</th>
                                    <th class="min-w-150px">التاريخ</th>
                                    <th class="min-w-150px">بواسطة</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-bold text-dark d-block fs-5">1</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-5">طارق محمد مندور</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bold d-block fs-5">1-5-2021</span>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bold d-block fs-5">طارق محمد مندور</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-bold text-dark d-block fs-5">2</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-5">مالك طارق محمد مندور</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bold d-block fs-5">1-5-2021</span>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bold d-block fs-5">طارق محمد مندور</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-bold text-dark d-block fs-5">3</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-5">روفان طارق محمد مندور</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bold d-block fs-5">1-5-2021</span>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bold d-block fs-5">طارق محمد مندور</span>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
        </div>
        <!--end::Row-->

    </div>
    <!--end::Post-->
</div>
@endsection

@section('script')
    <script src="{{ URL::asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/js/custom/widgets.js')}}"></script>



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

