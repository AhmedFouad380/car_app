<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\polygon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PolygonController extends Controller
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
    public function index($id)
    {
        return view('admin.Polygon.index',compact('id'));
    }

    public function datatable(Request $request)
    {
        $data = polygon::orderBy('id', 'asc');
        if($request->country_id){
            $data->where('country_id',$request->country_id);
        }
        $data->get();
        return Datatables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('city_id', function ($row) {
                $data = $row->City->name;
                if($data){
                    return $data;
                }else{
                    return '';
                }
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
            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("Polygon-edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'is_active'])
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
            'lat' => 'required|string',
            'lng' => 'required|string',
            'city_id' => 'required|exists:cities,id',
            'is_active' => 'nullable|string',

        ]);
        $data = new polygon();
        $data->lat=$request->lat;
        $data->lng=$request->lng;
        $data->city_id=$request->city_id;
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
        $employee = polygon::findOrFail($id);
        return view('admin.Polygon.edit', compact('employee'));
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
            'is_active' => 'nullable|string',

        ]);

        $data = polygon::find($request->id);
        $data->lat=$request->lat;
        $data->lng=$request->lng;
        $data->city_id=$request->city_id;
        $data->is_active=$request->is_active;
        $data->save();


        return redirect('Polygons/'.$data->city_id)->with('message', 'تم التعديل بنجاح ');
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
            polygon::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
