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
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">المشاريع</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">المشاريع</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Stats-->
        <div class="row mb-5 g-lg-12">
            <div class="col-lg-12 col-xxl-12">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Wrapper-->
                        <div class="row fv-row">

                            <div class="col-5">

                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_filter">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <path
                                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                            fill="black"/>
                                    </svg>
                                    </span>
                                <!--end::Svg Icon-->الفلتر
                            </button>
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user">
                                    <i class="bi bi-plus-circle-fill fs-2x"></i>
                                    اضافة مشروع جديد
                                </button>
                            </div>

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Stats-->

        <!--begin::Row-->
        <div class="row g-5 g-lg-10">
            <!--begin::Col-->
            @inject('contract','App\Models\Contract')

        @foreach($data as $project)
            <div class="col-md-6 col-xl-4">
                <!--begin::Card-->
                <a href="{{url('project_details',$project->id)}}" class="card border-hover-primary">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="{{ URL::asset('admin/assets/media/svg/brand-logos/plurk.svg')}}" alt="image" class="p-3" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::Car Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">{{$contract->find($project->projectContract->contract_id)->title}}</span>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bolder text-dark">{{$project->name}}</div>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">{{$project->client->name}}</p>
                        <!--end::Description-->
                        <!--begin::Progress-->
                        <div class="flex-grow-1">
                            <div class="mixed-widget-4-chart{{$project->id}}" data-kt-chart-color="primary" style="height: 200px"></div>
                        </div>
                        <!--end::Progress-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">{{$project->confirm_date}}</div>
                                <div class="fw-bold text-gray-400">تاريخ بداية العقد</div>
                            </div>
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                @inject('ProjectLevels','App\Models\ProjectLevels')
                                <?php
                                $sum = $ProjectLevels->where('project_id',$project->id)->sum('progress_time');
                                ?>
                                <div class="fs-6 text-gray-800 fw-bolder">{{\Carbon\Carbon::parse($project->confirm_date)->addDays($sum)->format('Y-m-d')}}</div>
                                <div class="fw-bold text-gray-400">تاريخ التسليم المتوقع
                                </div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover">
                            <!--begin::User-->
                            @if(count($project->assginUsers) > 0)
                            @foreach($project->assginUsers as $emp)
                                @if(isset($emp->image))
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{$emp->name}}">
                                        <img alt="Pic" src="{{$emp-image}}" />
                                    </div>
                                @else
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{$emp->name}}">
                                        <img alt="Pic" src="{{ URL::asset('admin/assets/media/avatars/150-2.jpg')}}" />
                                    </div>
                                @endif
                            @endforeach
                        @else
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="">
                                    <div style=" height: 35px"></div>
                                </div>
                                @endif
                            <!--begin::User-->
                            <!--begin::User-->

                            <!--begin::User-->
                        </div>
                        <!--end::Users-->
                    </div>
                    <!--end:: Card body-->
                </a>
                <!--end::Card-->
            </div>
            <!--end::Col-->


        @endforeach
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Pagination-->
        <div class="d-flex flex-stack flex-wrap pt-10">
            <!--begin::Pages-->
            <ul class="pagination">
                @php
                    $paginator =$data->appends(request()->input())->links()->paginator;
                        if ($paginator->currentPage() < 2 ){
                                    $link = $paginator->currentPage();
                        }else{
                             $link = $paginator->currentPage() -1;
                        }
                        if($paginator->currentPage() == $paginator->lastPage()){
                                   $last_links = $paginator->currentPage();
                        }else{
                                   $last_links = $paginator->currentPage() +1;

                        }
                @endphp
                @if ($paginator->lastPage() > 1)
                    <ul class="pagination">
                        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} page-item">
                            <a class="page-link" href="{{ $paginator->url(1) }}">الاول </a>
                        </li>
                        @for ($i = $link; $i <= $last_links; $i++)
                            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-item">
                                <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} page-item">
                            <a class="page-link"
                               href="{{ $paginator->url($paginator->lastPage()) }}">الاخير</a>
                        </li>
                    </ul>
                @endif

            <!--end::Pages-->
        </div>
        <!--end::Pagination-->

    </div>
    <!--end::Post-->
</div>


<div class="modal fade" id="kt_modal_filter" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">اعدادات الفلتر</h2>
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
                <form id="" class="form" method="get">
                @csrf
                <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7"
                         id="kt_modal_add_user_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}"
                         data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_add_user_header"
                         data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                         data-kt-scroll-offset="300px">
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">اسم المشروع</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" autocomplete="nope" />
                        </div>

                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">رقم العميل</label>

                            <input type="number" class="form-control form-control-lg form-control-solid" name="phone" minlength="9" maxlength="9" placeholder="" value="" autocomplete="nope" />
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">نوع التعاقد</label>
                            <select name="contract_id" class="form-select  form-control form-select-lg form-select-solid" data-placeholder="مراحل المشروع ..." data-allow-clear="true" data-hide-search="true">
                                <option value="">اختر</option>
                                @inject('Contracts','App\Models\Contract')
                                @foreach($Contracts->all() as $Contract)
                                    <option value="{{$Contract->id}}">{{$Contract->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if(Auth::user()->jop_type == 3)
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">المناطق</label>

                            <select name="country" class="form-select form-control form-select-lg form-select-solid" data-placeholder="مراحل المشروع ..." data-allow-clear="true" data-hide-search="true">
                                <option value=""> اختر</option>
                                @inject('states','App\Models\State')
                                @foreach($states->all() as $state)
                                <option value="{{$state->id}}">{{$state->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">بحث بتاريخ </label>

                            <select name="dateType" class="form-select form-control form-select-lg form-select-solid" data-placeholder="مراحل المشروع ..." data-allow-clear="true" data-hide-search="true">
                                <option value="">  اختر </option>
                                <option value="1">بداية العقد</option>
                                <option value="2">نهاية العقد</option>
                            </select>
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">من تاريخ</label>

                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon position-absolute ms-4 mb-1 svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                            <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                            <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                <!--end::Svg Icon-->
                                <input class="form-control form-control-solid ps-12" name="from" placeholder="Pick a date" id="kt_daterangepicker_1" />
                            </div>
                        </div>

                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">الى تاريخ</label>

                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon position-absolute ms-4 mb-1 svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                            <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                            <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                        </svg>
                                    </span>
                                <!--end::Svg Icon-->
                                <input class="form-control form-control-solid ps-12" name="to" placeholder="Pick a date" id="kt_daterangepicker_2" />
                            </div>
                        </div>

                        <!--end::Input group-->

                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">ألغاء
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
                <form id="" class="form" method="post" action="{{url('store-project')}}">
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
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">اسم المشروع</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" autocomplete="nope" />
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">اسم العميل</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            @inject('clients','App\Models\Client')
                            <select class="form-control" name="client_id">
                                @foreach($clients->all() as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>

                        <div class="fv-row mb-7">
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
                        <div class="fv-row mb-7" id="state">
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


                        <!--end::Input group-->  <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">تاريخ التفعيل</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="date" name="confirm_date"
                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                   required/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">نوع العقد</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="contract_id" class="form-control" >
                                @inject('Contracts','App\Models\Contract')
                                @foreach($Contracts->where('id','!=',1)->get() as $con)
                                    <option value="{{$con->id}}">
                                        {{$con->title}}
                                    </option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">نوع الموقع</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="address_type" id="address_type"class="form-control" >
                                <option value="1">اختيار من الخريطة </option>
                                <option value="0">اضافة لينك </option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <div id="map">
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
                                $lat = !empty(old('lat')) ? old('lat') : '24.69670448385797';
                                $lng = !empty(old('lng')) ? old('lng') : '46.690517596875';
                            ?>

                            <input type="hidden" id="lat" name="lat" required value="{{$lat}}">
                            <input type="hidden" id="lng" name="lng"  required value="{{$lng}}">
                                <!--begin::Product-->
                            <!--end::Input group-->
                        </div>
                        </div>
                        <div class="fv-row mb-7" id="link" style="display:none">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2">رابط الموقع</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="address_link" class="form-control" type="text" >
                            <!--end::Input-->
                        </div>
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

@endsection

@section('script')
    <script src="{{ URL::asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
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
        $('#address_type').on('change , click',function () {
            if($(this).val() == 1){
                document.getElementById("map").style.display = "block";
                document.getElementById("link").style.display = "none";

            }else{
                document.getElementById("map").style.display = "none";
                document.getElementById("link").style.display = "block";

            }
        })
    </script>
    {{--    <script src="{{ URL::asset('admin/assets/js/custom/widgets.js')}}"></script>--}}
    @foreach($data as $project)
<script>
    (function () {
        var e = document.querySelectorAll(".mixed-widget-4-chart{{$project->id}}");

        [].slice.call(e).map(function (e) {
            var t = parseInt(KTUtil.css(e, "height"));
            if (e) {
                var a = e.getAttribute("data-kt-chart-color"),
                    o = KTUtil.getCssVariableValue("--bs-" + a),
                    s = KTUtil.getCssVariableValue("--bs-light-" + a),
                    r = KTUtil.getCssVariableValue("--bs-gray-700");
                new ApexCharts(e, {
                    series: [{{$project->progress}}],
                    chart: { fontFamily: "inherit", height: t, type: "radialBar" },
                    plotOptions: {
                        radialBar: {
                            hollow: { margin: 0, size: "65%" },
                            dataLabels: {
                                showOn: "always",
                                name: { show: !1, fontWeight: "700" },
                                value: {
                                    color: r,
                                    fontSize: "30px",
                                    fontWeight: "700",
                                    offsetY: 12,
                                    show: !0,
                                    formatter: function (e) {
                                        return {{$project->progress}} + "%";
                                    },
                                },
                            },
                            track: { background: s, strokeWidth: "100%" },
                        },
                    },
                    colors: [o],
                    stroke: { lineCap: "round" },
                    labels: ["Progress"],
                }).render();
            }
        });
    })()

</script>
@endforeach
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

            $("#kt_daterangepicker_1").daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901,
                    maxYear: parseInt(moment().format("YYYY"),10)
                }, function(start, end, label) {
                    var years = moment().diff(start, "years");
                    alert("You are " + years + " years old!");
                }
            );

            $("#kt_daterangepicker_2").daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901,
                    maxYear: parseInt(moment().format("YYYY"),10)
                }, function(start, end, label) {
                    var years = moment().diff(start, "years");
                    alert("You are " + years + " years old!");
                }
            );
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

