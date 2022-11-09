<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function index(Request $request){

        $validator = Validator::make($request->all(), [
            'country_id' => 'required|exists:countries,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = City::where('country_id',$request->country_id)->where('is_active',1)->get();

        return response()->json(msgdata($request, success(), 'success', $data));
    }

}
