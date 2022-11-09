@extends('admin.layouts.master')

@section('css')
    <link href="{{ URL::asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ URL::asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
        }

        .select2-container .select2-selection--single .select2-selection__clear {
            padding-right: 355px;
        }
    </style>
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
        <li class="breadcrumb-item text-gray-500">تصنيف الرسائل</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->

        @include('admin.setting.kt_aside')

        <div class="content flex-row-fluid" id="kt_content">

            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="col-xl-6 mb-5">
                    <!--begin::Row-->
                    <div class="row g-5 g-lg-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-5 mb-lg-10">
                            <!--begin::Tiles Widget 5-->
                            <a href="#" class="card bg-primary h-150px">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"/>
                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"/>
                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-flex flex-column">
                                        <div class="text-white fw-bolder fs-1 mb-0 mt-5">{{$settings->sms_limit}}</div>
                                        <div class="text-white fw-bold fs-6">اجمالي الرسائل</div>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Tiles Widget 5-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-5 mb-lg-10">
                            <!--begin: Statistics Widget 6-->
                            <a href="#" class="card bg-body h-150px">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column py-6 px-6">
                                    <div class="d-flex flex-column flex-grow-1 mb-5">
                                        <span class="text-gray-500 fw-bold me-2 fs-7">اجمالي الرسائل المستخدمة</span>
                                        <span class="fw-bolder fs-1 text-gray-900">{{$settings->sms_used}}</span>
                                    </div>
                                    <div class="progress h-7px bg-info bg-opacity-25">
                                        <div class="progress-bar bg-info" role="progressbar"
                                             style="width: {{ ($settings->sms_used / $settings->sms_limit) * 100 }}%"
                                             aria-valuenow="{{$settings->sms_used}}" aria-valuemin="0"
                                             aria-valuemax="{{$settings->sms_limit}}">

                                        </div>
                                    </div>
                                </div>
                                <!--end:: Body-->
                            </a>
                            <!--end: Statistics Widget 6-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->

                </div>
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-4 gy-5" id="users_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->

                        <tr class="text-start text-muted fw-bolder fs-5 text-uppercase gs-0">
                            <th class="min-w-125px">الرسالة</th>
                            <th class=" min-w-100px">الوقت والتاريخ</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

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
                    {
                        extend: 'print',
                        className: 'btn btn-light-primary me-3',
                        text: '<i class="bi bi-printer-fill fs-2x"></i>'
                    },
                    // {extend: 'pdf', className: 'btn btn-raised btn-danger', text: 'PDF'},
                    {
                        extend: 'excel',
                        className: 'btn btn-light-primary me-3',
                        text: '<i class="bi bi-file-earmark-spreadsheet-fill fs-2x"></i>'
                    },
                    // {extend: 'colvis', className: 'btn secondary', text: 'إظهار / إخفاء الأعمدة '}

                ],
                ajax: {
                    url: '{{ route('messages.datatable.data') }}',
                    data: {}
                },
                columns: [
                    {data: 'description', name: 'description', "searchable": true, "orderable": true},
                    {data: 'created_at', name: 'created_at', "searchable": true, "orderable": true},
                ]
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

