<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware(function ($request, $next) {
//            $this->id = \Illuminate\Support\Facades\Auth::user()->userGroup->is_settings;
//            if( $this->id  == 0 ){
//                return redirect('/');
//            }
//            return $next($request);
//
//        });

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Service.index');
    }

    public function datatable(Request $request)
    {
        $data = Service::orderBy('id', 'asc')->get();
        return Datatables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->addColumn('Cities', function ($row) {
                $actions = ' <a href="' . url("Cities/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-eye-fill"></i> المدن </a>';
                return $actions;
            })

            ->editColumn('name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->name . '</span>';
                return $name;
            })

            ->editColumn('is_active', function ($row) {
                $is_active = '<div class="badge badge-light-success fw-bolder">مفعل</div>';
                $not_active = '<div class="badge badge-light-danger fw-bolder">غير مفعل</div>';
                if ($row->is_active == 1) {
                    return $is_active;
                } else {
                    return $not_active;
                }
            })
            ->addColumn('serviceTypes', function ($row) {
                $actions = ' <a href="' . url("ServiceTypes/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-eye-fill"></i>  </a>';
                return $actions;

            })

            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("Service-edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'serviceTypes'])
            ->make();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $b = $this->validate(request(), [
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'image' => 'required',

        ]);
        $data = new Service();
        $data->ar_name=$request->ar_name;
        $data->en_name=$request->en_name;
        $data->ar_description=$request->ar_description;
        $data->en_description=$request->en_description;
        $data->image=$request->image;
        $data->is_active=$request->is_active;
        $data->save();


        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Service::findOrFail($id);
        return view('admin.Service.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $b = $this->validate(request(), [
            'ar_name' => 'required|string',
            'en_name' => 'required|string',

        ]);

        $data = Service::find($request->id);
        $data->ar_name=$request->ar_name;
        $data->en_name=$request->en_name;
        $data->ar_description=$request->ar_description;
        $data->en_description=$request->en_description;
        if($request->image){
        $data->image=$request->image;
        }
        $data->is_active=$request->is_active;
        $data->save();


        return redirect('Services')->with('message', 'تم التعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            Service::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
