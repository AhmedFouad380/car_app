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
    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">البريد الوارد</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ url('/') }}" class="text-gray-600 text-hover-primary">لوحة القيادة</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-500">البريد الوارد</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Inbox App - Messages -->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 mb-lg-0">
                <!--begin::Sticky aside-->
                <div class="card card-flush mb-0" data-kt-sticky="false" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '0px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <!--begin::Aside content-->
                    <div class="card-body">
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary text-uppercase w-100 mb-10">رسالة جديدة</a>
                        <!--end::Button-->
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                            <!--begin::Menu item-->
                            <div class="menu-item mb-3">
                                <!--begin::Inbox-->
                                <span class="menu-link active">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                        <span class="svg-icon svg-icon-2 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
                                                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title fw-bolder">البريد الوارد</span>
                                    <span class="badge badge-light-success">3</span>
                                </span>
                                <!--end::Inbox-->
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside content-->
                </div>
                <!--end::Sticky aside-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-body p-0">
                        <!--begin::Table-->
                        <table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
                            <!--begin::Table head-->
                            <thead class="d-none">
                                <tr>
                                    <th>م</th>
                                    <th>العنوان</th>
                                    <th>المحتوى</th>
                                    <th>الوقت والتاريخ</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td class="ps-9">
                                        <span class="fw-bold text-dark d-block fs-5">1</span>
                                    </td>
                                    <!--begin::Author-->
                                    <td class="w-250px">
                                        <a href="#" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <span class="text-danger">M</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <span class="fw-bold">شركة القمم للمقاولات</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <!--end::Author-->
                                    <!--begin::Title-->
                                    <td>
                                        <div class="text-dark mb-1">
                                            <a href="../../demo16/dist/apps/inbox/reply.html" class="text-dark">
                                                <span class="fw-bolder">اشعار المعلومات الماية للعقد</span>
                                                <br>
                                                <span class="text-muted">عزيز العميل ، نرحب بكم ..</span>
                                            </a>
                                        </div>
                                    </td>
                                    <!--end::Title-->
                                    <!--begin::Date-->
                                    <td class="w-200px text-end fs-7 pe-9">
                                        <span class="fw-bold">2022-1-1  8:30 PM</span>
                                    </td>
                                    <!--end::Date-->
                                </tr>
                                <tr>
                                    <td class="ps-9">
                                        <span class="fw-bold text-dark d-block fs-5">1</span>
                                    </td>
                                    <!--begin::Author-->
                                    <td class="w-250px">
                                        <a href="#" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <span class="text-danger">M</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <span class="fw-bold">شركة القمم للمقاولات</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <!--end::Author-->
                                    <!--begin::Title-->
                                    <td>
                                        <div class="text-dark mb-1">
                                            <a href="../../demo16/dist/apps/inbox/reply.html" class="text-dark">
                                                <span class="fw-bolder">اشعار المعلومات الماية للعقد</span>
                                                <br>
                                                <span class="text-muted">عزيز العميل ، نرحب بكم ..</span>
                                            </a>
                                        </div>
                                    </td>
                                    <!--end::Title-->
                                    <!--begin::Date-->
                                    <td class="w-200px text-end fs-7 pe-9">
                                        <span class="fw-bold">2022-1-1  8:30 PM</span>
                                    </td>
                                    <!--end::Date-->
                                </tr>
                                <tr>
                                    <td class="ps-9">
                                        <span class="fw-bold text-dark d-block fs-5">2</span>
                                    </td>
                                    <!--begin::Author-->
                                    <td class="w-250px">
                                        <a href="#" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <span class="text-danger">M</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <span class="fw-bold">شركة القمم للمقاولات</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <!--end::Author-->
                                    <!--begin::Title-->
                                    <td>
                                        <div class="text-dark mb-1">
                                            <a href="../../demo16/dist/apps/inbox/reply.html" class="text-dark">
                                                <span class="fw-bolder">اشعار المعلومات الماية للعقد</span>
                                                <br>
                                                <span class="text-muted">عزيز العميل ، نرحب بكم ..</span>
                                            </a>
                                        </div>
                                    </td>
                                    <!--end::Title-->
                                    <!--begin::Date-->
                                    <td class="w-200px text-end fs-7 pe-9">
                                        <span class="fw-bold">2022-1-1  8:30 PM</span>
                                    </td>
                                    <!--end::Date-->
                                </tr>
                                <tr>
                                    <td class="ps-9">
                                        <span class="fw-bold text-dark d-block fs-5">3</span>
                                    </td>
                                    <!--begin::Author-->
                                    <td class="w-250px">
                                        <a href="#" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <span class="text-danger">M</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <span class="fw-bold">شركة القمم للمقاولات</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <!--end::Author-->
                                    <!--begin::Title-->
                                    <td>
                                        <div class="text-dark mb-1">
                                            <a href="../../demo16/dist/apps/inbox/reply.html" class="text-dark">
                                                <span class="fw-bolder">اشعار المعلومات الماية للعقد</span>
                                                <br>
                                                <span class="text-muted">عزيز العميل ، نرحب بكم ..</span>
                                            </a>
                                        </div>
                                    </td>
                                    <!--end::Title-->
                                    <!--begin::Date-->
                                    <td class="w-200px text-end fs-7 pe-9">
                                        <span class="fw-bold">2022-1-1  8:30 PM</span>
                                    </td>
                                    <!--end::Date-->
                                </tr>
                                <tr>
                                    <td class="ps-9">
                                        <span class="fw-bold text-dark d-block fs-5">4</span>
                                    </td>
                                    <!--begin::Author-->
                                    <td class="w-250px">
                                        <a href="#" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <span class="text-danger">M</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <span class="fw-bold">شركة القمم للمقاولات</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <!--end::Author-->
                                    <!--begin::Title-->
                                    <td>
                                        <div class="text-dark mb-1">
                                            <a href="../../demo16/dist/apps/inbox/reply.html" class="text-dark">
                                                <span class="fw-bolder">اشعار المعلومات الماية للعقد</span>
                                                <br>
                                                <span class="text-muted">عزيز العميل ، نرحب بكم ..</span>
                                            </a>
                                        </div>
                                    </td>
                                    <!--end::Title-->
                                    <!--begin::Date-->
                                    <td class="w-200px text-end fs-7 pe-9">
                                        <span class="fw-bold">2022-1-1  8:30 PM</span>
                                    </td>
                                    <!--end::Date-->
                                </tr>
                                <tr>
                                    <td class="ps-9">
                                        <span class="fw-bold text-dark d-block fs-5">5</span>
                                    </td>
                                    <!--begin::Author-->
                                    <td class="w-250px">
                                        <a href="#" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <span class="text-danger">M</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <span class="fw-bold">شركة القمم للمقاولات</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <!--end::Author-->
                                    <!--begin::Title-->
                                    <td>
                                        <div class="text-dark mb-1">
                                            <a href="../../demo16/dist/apps/inbox/reply.html" class="text-dark">
                                                <span class="fw-bolder">اشعار المعلومات الماية للعقد</span>
                                                <br>
                                                <span class="text-muted">عزيز العميل ، نرحب بكم ..</span>
                                            </a>
                                        </div>
                                    </td>
                                    <!--end::Title-->
                                    <!--begin::Date-->
                                    <td class="w-200px text-end fs-7 pe-9">
                                        <span class="fw-bold">2022-1-1  8:30 PM</span>
                                    </td>
                                    <!--end::Date-->
                                </tr>
                                <tr>
                                    <td class="ps-9">
                                        <span class="fw-bold text-dark d-block fs-5">6</span>
                                    </td>
                                    <!--begin::Author-->
                                    <td class="w-250px">
                                        <a href="#" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <span class="text-danger">M</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <span class="fw-bold">شركة القمم للمقاولات</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <!--end::Author-->
                                    <!--begin::Title-->
                                    <td>
                                        <div class="text-dark mb-1">
                                            <a href="../../demo16/dist/apps/inbox/reply.html" class="text-dark">
                                                <span class="fw-bolder">اشعار المعلومات الماية للعقد</span>
                                                <br>
                                                <span class="text-muted">عزيز العميل ، نرحب بكم ..</span>
                                            </a>
                                        </div>
                                    </td>
                                    <!--end::Title-->
                                    <!--begin::Date-->
                                    <td class="w-200px text-end fs-7 pe-9">
                                        <span class="fw-bold">2022-1-1  8:30 PM</span>
                                    </td>
                                    <!--end::Date-->
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Inbox App - Messages -->
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

