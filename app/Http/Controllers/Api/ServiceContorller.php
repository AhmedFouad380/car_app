<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Service;
use App\Models\ServiceCosts;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceContorller extends Controller
{
    public function index(Request $request){
        $data = Service::where('is_active',1)->get();

        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function ServicesTypes(Request $request){
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',

        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $data = ServiceType::where('service_id',$request->service_id)->where('is_active',1)->get();

        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function checkServiceCost(Request $request){
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:service_types,id',
            'start_lat'=>'required',
            'start_lng'=>'required',
            'end_lat'=>'required',
            'end_lng'=>'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $service = ServiceType::findOrFail($request->service_id);

        $cities = City::where('is_active',1)->get();
        foreach($cities as $city){
            if(isset($city->polygon)){
                $point = $request->start_lat .' '. $request->start_lng;
                $polygon = json_decode($city->polygon);
                if(pointInPolygon($point, $polygon) !='outside'){
                    $cityid = $city->id;
                }
            }
        }
        if(isset($cityid)){
            $ServiceCost = ServiceCosts::where('city_id',$cityid)->where('service_type_id',$service->id)->firstOrFail();
        }else{
            return response()->json(['status' => 401, 'msg' => 'out area', 'data' => (object)[]]);

        }

        if($ServiceCost->is_distance == 'active'){
            if(isset($request->start_lat) && isset($request->start_lng)  && isset($request->end_lat)   && isset($request->end_lng) ){
                   $api =  distance($request->start_lat , $request->start_lng , $request->end_lat , $request->end_lng);
                $distance = $api['distance'];
            }else{
                return response()->json(['status' => 401, 'msg' => 'Direction Required', 'data' => (object)[]]);
            }
            $minprice = $ServiceCost->minimum_price;
            $mindis = $ServiceCost->minimum_distance;
            $outdis = ( $distance - $ServiceCost->minimum_distance );
            if($distance < $mindis){
                $TotalPrice = $minprice;

            }else{
                $overprice= $outdis * $ServiceCost->distance_price;
                $TotalPricee =  $overprice + $minprice;
                $TotalPrice = round($TotalPricee);
            }

            if($ServiceCost->is_discount == 'active'){
                $discount = ($ServiceCost->discount * $TotalPrice ) / 100;
                $data = array('total_price'=>$TotalPrice - $discount ,'distance'=>$api['distance'] ,'estimate_time' => round($api['time'] / 60) );
            }else{
                $data = array('total_price'=>$TotalPrice ,'distance'=>$api['distance'] ,'estimate_time' => round($api['time'] / 60) );

            }

            return response()->json(msgdata($request, success(), 'success', $data));
        }elseif($ServiceCost->is_time == 'active'){

            if(isset($request->start_lat) && isset($request->start_lng)  && isset($request->end_lat)   && isset($request->end_lng) ){
                $api =  distance($request->start_lat , $request->start_lng , $request->end_lat , $request->end_lng);
                $time = $api['time'] / 60 ;
            }else{
                return response()->json(['status' => 401, 'msg' => 'Direction Required', 'data' => (object)[]]);
            }

            $minprice = $ServiceCost->minimum_price;
            $mindis = $ServiceCost->minimum_time;
            $outdis = ( $time - $ServiceCost->minimum_time );

            if($time < $mindis){
                $TotalPrice = $minprice;

            }else{
                $overprice= $outdis * $ServiceCost->time_price;
                $TotalPricee =  $overprice + $minprice;
                $TotalPrice = round($TotalPricee);
            }

            $roundTime = round($time );
            if($ServiceCost->is_discount == 'active'){
                $discount = ($ServiceCost->discount * $TotalPrice ) / 100;
                $data = array('total_price'=>$TotalPrice - $discount ,  'distance'=>$api['distance'] ,'estimate_time' =>$roundTime );
            }else{
                $data = array('total_price'=>$TotalPrice ,'distance'=>$api['distance'] ,'estimate_time' => $roundTime );
            }

            return response()->json(msgdata($request, success(), 'success', $data));

        }

    }

}
