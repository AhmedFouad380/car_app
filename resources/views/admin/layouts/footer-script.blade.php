<script>var hostUrl = "{{asset('admin/assets/')}}";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
@yield('script')
<!--end::Page Custom Javascript-->

<?php
$errors = session()->get("errors");
?>

@if( session()->has("errors"))
    <?php
    $e = implode(' - ', $errors->all());
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif


@if( session()->has("error"))
    <?php
    $e = session()->get("error");
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif
<?php
$error_message = session()->get("error_message");
?>

@if( session()->has("error_message"))
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

        toastr.error("{{$error_message}}" , "عفوا !" );
    </script>

@endif

<!--end::Javascript-->

