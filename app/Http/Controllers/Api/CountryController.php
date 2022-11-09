<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request){
        $data = Country::all();
        return response()->json(msgdata($request, success(), 'success', $data));
    }
}
