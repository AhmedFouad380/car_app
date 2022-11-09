<div class="d-flex text-center flex-column text-white pt-8">
    <span class="fw-bold fs-7" style="color:#000">اجمالي دخل المشاريع  </span>
    @inject('income','App\Models\Income')
    <span class="fw-bolder fs-2x pt-1" style="color:#000">{{$income->whereDate('created_at',"<=",$data->to)->whereDate('created_at','>=',$data->from)->sum('amount')}} ر.س</span>
</div>
@inject('contracts','App\Models\Contract')
@inject('ProjectContract','App\Models\ProjectContract')
<!--end::Item-->
<!--begin::Item-->
@foreach($contracts->where('id','!=',1)->get() as $Contract)
    <div class="d-flex align-items-center">
        <!--begin::Symbol-->
        <div class="symbol symbol-45px w-40px me-5">
                                    <span class="symbol-label bg-lighten">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
        </div>
        <!--end::Symbol-->
        <!--begin::Description-->
        <div class="d-flex align-items-center flex-wrap w-100">
            <!--begin::Title-->
            <div class="mb-1 pe-3 flex-grow-1">
                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">{{$Contract->title}}</a>
                <div class="text-gray-400 fw-bold fs-7"> ( {{$ProjectContract->whereDate('created_at',"<=",$data->to)->whereDate('created_at','>=',$data->from)->
join('incomes','incomes.project_id','project_contract.project_id')->where('contract_id',$Contract->id)->count() }} ) </div>
            </div>
            <!--end::Title-->
            <!--begin::Label-->
            <div class="d-flex align-items-center">
                <div class="fw-bolder fs-5 text-gray-800 pe-1">{{$ProjectContract->where('contract_id',$Contract->id)->
whereDate('created_at',"<=",$data->to)->whereDate('created_at','>=',$data->from)->
join('incomes','incomes.project_id','project_contract.project_id')->sum('amount')}}</div>
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                            </svg>
                                        </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Label-->
        </div>
        <!--end::Description-->
    </div>
@endforeach
