<link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">


<form class="px-10" novalidate="novalidate" id="kt_form2" method="post" action="{{url('AnswerLevelDetails')}}"
      enctype="multipart/form-data">
@csrf

<!--begin: Wizard Step 1-->
    <div class="mb-10">
        <label class="form-label fs-6 fw-bold" >السؤال</label>
        <input rows="5" class="form-control form-control-lg form-control-solid"value="{{$data->title}}">
    </div>
    @if( isset($data->date) & $data->date != '')
        <div class="mb-10">
        <label class="form-label fs-6 fw-bold" >التاريخ</label>
        <input rows="5" class="form-control form-control-lg form-control-solid"value="{{$data->date}}">
    </div>
    @endif
    <br>
        <input type="hidden" value="{{$data->id}}" name="id">
    @if($data->question_type == 1 )
        <div class="mb-10">
            <label class="form-label fs-6 fw-bold">الاجابة</label>
            <textarea rows="5" name="answer" class="form-control form-control-lg form-control-solid">{{$data->answer}}</textarea>
        </div>

        @elseif($data->question_type == 2 )
        <?php
        $a = str_replace('[', "" ,$data->values);
        $b = str_replace(']', "" ,$a);

        $answers = explode(',', $b);

        ?>
            <div class="mb-10">
            <label class="form-label fs-6 fw-bold">الاجابة</label>
            <select class="form-control " name="answer">
                @foreach($answers as $data1)
                    <option  @if($data1 == $data->answer ) selected @endif value="{{$data1}}">{{$data1}}</option>
                @endforeach
            </select>
        </div>

        @elseif($data->question_type == 3 )
        <div class="mb-10">
            <label>الاجابة</label>
            <?php
            $a = str_replace('[', "" ,$data->values);
            $b = str_replace(']', "" ,$a);

            $answers = explode(',', $b);

            ?>
            @foreach($answers as $data1)
                <label class="form-label fs-6 fw-bold">{{$data1}}</label>
                <input value="{{$data1}}" @if(is_array($data1 ,$answers) )checked  @endif type="checkbox" name="asnwer[]" class="form-control form-control-lg form-control-solid">
            @endforeach
        </div>
        @elseif($data->question_type == 4 )
        <div class="mb-10">
            <!--begin::Label-->
            <label class="col-lg-4 col-form-label fw-bold fs-6">صورة</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Image input-->
                <div class="image-input image-input-outline" data-kt-image-input="true"
                     style="background-image: url({{ URL::asset('admin/assets/media/avatars/blank.png')}})">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-125px h-125px"
                        ></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label
                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                        title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <!--begin::Inputs-->
                        <input type="file" name="answer" accept=".png, .jpg, .jpeg"/>
                        <input type="hidden" name="avatar_remove"/>
                        <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span
                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    <span
                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                        title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                    <!--end::Remove-->
                </div>
                <!--end::Image input-->
                <!--begin::Hint-->
{{--                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>--}}
                <!--end::Hint-->
            </div>
            <!--end::Col-->
        </div>


        @elseif($data->question_type == 5 )

        <div class="mb-10">
            <label class="">الاجابة</label>
            <select class="form-control form-control-lg form-control-solid " name="answer">
                @foreach($data->values as $data1)
                    <option   @if($data1 == $data->answer ) selected @endif  value="{{$data1}}">{{$data1}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-10">
            <label>الاجابة اخرى</label>
            <textarea rows="5" name="otherAnswer" class="form-control form-control-lg form-control-solid">{{$data->otherAnswer}}</textarea>
        </div>
        @endif

        @if($data->is_pdf == 1 )

        <div class="mb-10">
            <!--begin::Label-->
            <label class="col-lg-4 col-form-label fw-bold fs-6">المرفق</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Image input-->
                <div class="image-input image-input-outline" data-kt-image-input="true"
                     style="background-image: url({{ URL::asset('admin/assets/media/avatars/blank.png')}})">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-125px h-125px"
                    ></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label
                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                        title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <!--begin::Inputs-->
                        <input type="file" name="img" accept=".png, .jpg, .jpeg"/>
                        <input type="hidden" name="avatar_remove"/>
                        <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span
                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    <span
                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                        title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                    <!--end::Remove-->
                </div>
                <!--end::Image input-->
                <!--begin::Hint-->
            {{--                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>--}}
            <!--end::Hint-->
            </div>
            <!--end::Col-->
        </div>

    @endif
        <!--end: Wizard Actions-->
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اللغاء</button>
        <button type="submit" class="btn btn-primary">حفظ</button>
    </div>
</form>


<script src="{{asset('dashboard/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
<script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/dropify.min.js')}}"></script>

<!--begin::Page scripts(used by this page) -->
<script>
    $('#kt_select4').select2({
        placeholder: ""
    });
    $('#kt_select5').select2({
        placeholder: ""
    });
</script>
<!--begin::Page scripts(used by this page) -->
<script type="text/javascript">
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    $("#MainCategory2").click(function () {
        var wahda = $(this).val();

        if (wahda != '') {

            $.get("{{ URL::to('/GetSubCategory')}}" + '/' + wahda, function ($data) {
                console.log($data)

                var outs = "";
                $.each($data, function (name, id) {

                    outs += '<option value="' + id + '">' + name + '</option>'

                });
                $('#SubCategory2').html(outs);


            });
        }
    });

</script>
