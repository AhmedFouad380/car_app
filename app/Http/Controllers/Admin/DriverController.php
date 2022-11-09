<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class DriverController extends Controller
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
        return view('admin.Drivers.index');
    }

    public function datatable(Request $request)
    {
        $data = Driver::orderBy('id', 'asc')->get();

        return Datatables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->name . '</span>
                                   <br> <small class="text-gray-600">' . $row->email . '</small>';
                return $name;
            })
            ->editColumn('country_id', function ($row) {
                $data = $row->Country->name;
                if($data){
                    return $data;
                }else{
                    return '';
                }
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
                $actions = ' <a href="' . url("client-edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'is_active'])
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'phone' => 'required|unique:users',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'address' => 'required|string',
            'is_active' => 'nullable|string',

        ]);
        $data = new Driver();
        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->password=Hash::make($request->password);
        $data->email=$request->email;
        $data->country_id=$request->country_id;
        $data->city_id=$request->city_id;
        $data->is_active=$request->is_active;
        $data->address=$request->address;
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
        $employee = Driver::findOrFail($id);
        return view('admin.Drivers.edit', compact('employee'));
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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => '',
            'phone' => 'required',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'address' => 'required|string',
            'is_active' => 'nullable|string',

        ]);

        $data = Driver::find($request->id);
        $data->name=$request->name;
        $data->phone=$request->phone;
        if($request->password){
            $data->password=Hash::make($request->password);
        }
        $data->email=$request->email;
        $data->country_id=$request->country_id;
        $data->city_id=$request->city_id;
        $data->is_active=$request->is_active;
        $data->address=$request->address;
        $data->save();

        return redirect('Clients')->with('message', 'تم التعديل بنجاح ');
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
            Driver::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }

    public function getCities($id)
    {
        $data = City::where('country_id', $id)->get();

        return view('admin.Setting.City.modelShow',compact('data'));
    }
}
