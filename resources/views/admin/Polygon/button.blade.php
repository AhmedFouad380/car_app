<div class="dt-buttons flex-wrap">

    <!--end::Filter-->
    <!--begin::Add user-->
    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
            data-bs-target="#kt_modal_add_user">
        <i class="bi bi-plus-circle-fill fs-2x"></i>
    </button>

    <!--end::Add user-->
    <button id="delete" class="btn btn-light-danger me-3 font-weight-bolder">
        <i class="bi bi-trash-fill fs-2x"></i>
    </button>

    <!--begin::Modal - Add task-->
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
                    <form id="" class="form" method="post" action="{{url('store-Polygon')}}">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7"
                             id="kt_modal_add_user_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}"
                             data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_add_user_header"
                             data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                             data-kt-scroll-offset="300px">
                            <div class="scroll-y mh-300px me-n7 pe-7">
                                <input type="text" id="search_input"
                                       placeholder=" أبحث  بالمكان او اضغط على الخريطه"/>
                                <input type="hidden" id="information"/>
                                <div id="us1" style="width: 100%; height: 400px;"></div>
                                <?php
                                    $lat = !empty(old('lat')) ? old('lat') : '24.69670448385797';
                                    $lng = !empty(old('lng')) ? old('lng') : '46.690517596875';

                                ?>

                                <input type="hidden" id="lat" name="lat" required value="{{$lat}}">
                                <input type="hidden" id="lng" name="lng" required value="{{$lng}}">
                                <!--begin::Product-->
                                <!--end::Input group-->
                            </div>

                            <!--begin::Input group-->
                           <input type="hidden" name="city_id" value="{{$id}}">
                            <!--end::Input group-->
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid">
                                    <label class="form-check-label" for="flexSwitchDefault">مفعل
                                        ؟</label>
                                    <input class="form-check-input" name="is_active" type="hidden"
                                           value="0" id="flexSwitchDefault"/>
                                    <input
                                        class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                        name="is_active" type="checkbox"
                                        value="1" id="flexSwitchDefault" checked/>
                                </div>
                            </div>
                            <!--end::Input group-->


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
    <!--end::Modal - Add task-->
</div>
<script type="text/javascript"
        src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyAIcQUxj9rT_a3_5GhMp-i6xVqMrtasqws&language=ar'></script>
<script src="{{asset('admin/locationpicker.jquery.js')}}"></script>


<script>

    const myLatLng = {lat: -25.363, lng: 131.044};

    $('#us1').locationpicker({
        location: {
            latitude: {{$lat}},
            longitude: {{$lng}}
        },
        position: myLatLng,
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
            // if (location.coords) {
            //     latitude = location.coords.latitude;
            //     longitude = location.coords.longitude;
            // }
            var myLatlng = new google.maps.LatLng(latitude, longitude);
            var mapOptions = {
                zoom: 8,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,

            };
            map = new google.maps.Map(document.getElementById("us1"), mapOptions);

            content = document.getElementById('information');
            google.maps.event.addListener(map, 'click', function (e) {
                placeMarker(e.latLng);
            });

            var input = document.getElementById('search_input');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            var searchBox = new google.maps.places.SearchBox(input);

            google.maps.event.addListener(searchBox, 'places_changed', function () {
                var places = searchBox.getPlaces();
                placeMarker(places[0].geometry.location);
            });

            marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
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
        google.maps.event.addListener(marker, 'click', function (e) {
            new google.maps.InfoWindow({
                content: "Lat: " + location.lat() + " / Long: " + location.lng()
            }).open(map, marker);

        });
    }


</script>


<script type="text/javascript">

    $("#delete").on("click", function () {
        var dataList = [];
        $("input:checkbox:checked").each(function (index) {
            dataList.push($(this).val())
        })

        if (dataList.length > 0) {
            Swal.fire({
                title: "تحذير.هل انت متأكد؟!",
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
                        url: '{{url("delete-Polygon")}}',
                        type: "get",
                        data: {'id': dataList, _token: CSRF_TOKEN},
                        dataType: "JSON",
                        success: function (data) {
                            if (data.message == "Success") {
                                $("input:checkbox:checked").parents("tr").remove();
                                Swal.fire("نجاح", "تم الحذف بنجاح", "success");
                                // location.reload();
                            } else {
                                Swal.fire("نأسف", "حدث خطأ ما اثناء الحذف", "error");
                            }
                        },
                        fail: function (xhrerrorThrown) {
                            Swal.fire("نأسف", "حدث خطأ ما اثناء الحذف", "error");
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    Swal.fire("ألغاء", "تم الالغاء", "error");
                }
            });
        }
    });
</script>

<script>
    $("#state").change(function () {
        var wahda = $(this).val();

        if (wahda != '') {
            $.get("{{ URL::to('/get-Cities')}}" + '/' + wahda, function ($data) {
                $('#branche').html($data);
            });
        }
    });
</script>
