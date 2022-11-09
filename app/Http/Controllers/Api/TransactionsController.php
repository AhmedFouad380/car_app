<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendTransactionToDriver;
use App\Models\City;
use App\Models\Driver;
use App\Models\ServiceCosts;
use App\Models\ServiceType;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;
class TransactionsController extends Controller
{


    public function TransactionDetail(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = Transaction::whereId($request->id)->with(['Driver','User'])->firstOrFail();

        return response()->json(msgdata($request, success(), 'success', $data));

    }
    public function SendTransaction(Request $request){
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:service_types,id',
            'start_lat'=>'required',
            'start_lng'=>'required',
            'end_lat'=>'required',
            'end_lng'=>'required',
            'distance'=>'required',

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
                if($this->pointInPolygon($point, $polygon) !='outside'){
                    $cityid = $city->id;
                }
            }
        }
        if(isset($cityid)){
            $ServiceCost = ServiceCosts::where('city_id',$cityid)->where('service_type_id',$service->id)->firstOrFail();
        }else {
            return response()->json(['status' => 401, 'msg' => 'out area', 'data' => (object)[]]);
        }
        $data = new Transaction();
        $data->start_lat=$request->start_lat;
        $data->start_lng=$request->start_lng;
        $data->end_lat=$request->end_lat;
        $data->end_lng=$request->end_lng;
        $data->service_type_id=$request->service_id;
        $data->service_cost_id=$ServiceCost->id;
        $data->first_distance=$request->distance;
        $data->start_address=$request->start_address;
        $data->end_address=$request->end_address;
        $data->user_id=Auth::guard('api')->id();
        $data->date=\Carbon\Carbon::now()->format('Y-m-d');
        $data->save();


        $drivers = DB::table('drivers')
            ->selectRaw("drivers.* ,
                     ( 6371000 * acos( cos( radians(?) ) *
                       cos( radians( lat ) )
                       * cos( radians( lng ) - radians(?)
                       ) + sin( radians(?) ) *
                       sin( radians( lat ) ) )
                     ) AS distance", [$request->start_lat, $request->start_lng, $request->start_lat])
                ->having("distance", "<", $ServiceCost->range_driver_search)
            ->orderBy("distance",'asc')
            ->pluck('id')->toArray();
        $time = 30;

        foreach($drivers as $key => $driver){
            if($key > 0 ){
                SendTransactionToDriver::dispatch($data,$driver)
                    ->delay(now()->addSecond($time));
                $time = $time + 30;
            } else {
                SendTransactionToDriver::dispatch($data,$driver);
            }
        }

        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function AcceptTransaction(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = Transaction::findOrFail($request->id);
        $data->status='accept';
        $data->driver_id=auth('driver')->id();
        $data->save();

        $data2 = Transaction::where('id',$request->id)->with('User')->first();
        $data = Transaction::where('id',$request->id)->with('Driver')->first();

        $user  = User::findOrFail($data->user_id);
        $fcmRegIds = array();
        array_push($fcmRegIds, $user->device_token);
        $request = $data;
        $request->type = 'accept';
        $request->title = 'تم قبول الرحلة ';
        sendNotification($request,$fcmRegIds,'ios');

        return response()->json(msgdata($request, success(), 'success', $data2));

    }

    public function CancelTransaction(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = Transaction::findOrFail($request->id);
        $data->status='cancel';
        $data->driver_id=auth('driver')->id();
        $data->save();

        $data = Transaction::where('id',$request->id)->with('Driver')->first();

        $user  = Driver::findOrFail($data->driver_id);
        $fcmRegIds = array();
        array_push($fcmRegIds, $user->fcm_token);
        $request = $data;
        $request->type = 'cancel';
        $request->title = 'تم اللغاء الرحلة ';
        sendNotification($request,$fcmRegIds,'ios');

        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function StartTransaction(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
            'start_driver_lat'=>'required',
            'start_driver_lng'=>'required',
            'code'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = Transaction::findOrFail($request->id);
        if($data->code == $request->code){
        $data->status='start';
        $data->start_driver_lat=$request->start_driver_lat;
        $data->start_driver_lng=$request->start_driver_lng;
        $data->save();

        $data = Transaction::where('id',$request->id)->with('Driver')->first();

        $user  = User::findOrFail($data->user_id);
        $fcmRegIds = array();
        array_push($fcmRegIds, $user->device_token);
        $request = $data;
        $request->type = 'start';
        $request->title = 'تم بداء الرحلة ';
        sendNotification($request,$fcmRegIds,'ios');

        return response()->json(msgdata($request, success(), 'success', $data));
        }else{
            return response()->json(msgdata($request, error(), 'error', (object)[]));
        }

    }
    public function FinishTransaction(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
            'end_driver_lat'=>'required',
            'end_driver_lng'=>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = Transaction::findOrFail($request->id);
        $data->status='finish';
        $data->end_driver_lat=$request->end_driver_lat;
        $data->end_driver_lng=$request->end_driver_lng;
        $data->save();

        $data = Transaction::where('id',$request->id)->with('Driver')->first();

        $ServiceCost = ServiceCosts::where('id',$data->service_type_id)->firstOrFail();

        if($ServiceCost->is_distance == 'active'){
            $distance = $data->distance;
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
                $data2 = array('total_price'=>$TotalPrice - $discount ,'distance'=>$distance);
            }else{
                $data2 = array('total_price'=>$TotalPrice ,'distance'=>$distance );

            }

            return response()->json(msgdata($request, success(), 'success', $data));
        }elseif($ServiceCost->is_time == 'active'){

            $time = $data->waiting_time;
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
                $data2 = array('total_price'=>$TotalPrice - $discount ,  'distance'=>$time,'estimate_time' =>$roundTime );
            }else{
                $data2 = array('total_price'=>$TotalPrice ,'distance'=>$time,'estimate_time' => $roundTime );
            }


        }
        $data = Transaction::findOrFail($request->id);
        $data->total_price=$TotalPrice;
        $data->save();

        $user  = User::findOrFail($data->user_id);


        $fcmRegIds = array();
        array_push($fcmRegIds, $user->device_token);
        $request = $data;
        $request->type = 'finish';
        $request->title = 'تم الانتهاء من الرحلة ';
        sendNotification($request,$fcmRegIds,'ios');


        return response()->json(msgdata($request, success(), 'success', $data2));

    }

    public function SendPayed(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
            'total_payed'=>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = Transaction::findOrFail($request->id);
        $data->total_payed=$request->total_payed;
        $data->save();
        return response()->json(msgdata($request, success(), 'success', $data));


    }

    public function getCode(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:transactions,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
//        $code = rand(1000,9999);
        $code =1234;
        $data = Transaction::findOrFail($request->id);
        $data->code=$code;
        $data->save();

        return response()->json(msgdata($request, success(), 'success', $code));


    }


    function pointInPolygon($point, $polygon, $pointOnVertex = true) {
        $this->pointOnVertex = $pointOnVertex;

        // Transform string coordinates into arrays with x and y values
        $point = $this->pointStringToCoordinates($point);
        $vertices = array();
        foreach ($polygon as $vertex) {
            $vertices[] = $this->pointStringToCoordinates($vertex);
        }

        // Check if the point sits exactly on a vertex
        if ($this->pointOnVertex == true and $this->pointOnVertex($point, $vertices) == true) {
            return "vertex";
        }

        // Check if the point is inside the polygon or on the boundary
        $intersections = 0;
        $vertices_count = count($vertices);

        for ($i=1; $i < $vertices_count; $i++) {
            $vertex1 = $vertices[$i-1];
            $vertex2 = $vertices[$i];
            if ($vertex1['y'] == $vertex2['y'] and $vertex1['y'] == $point['y'] and $point['x'] > min($vertex1['x'], $vertex2['x']) and $point['x'] < max($vertex1['x'], $vertex2['x'])) { // Check if point is on an horizontal polygon boundary
                return "boundary";
            }
            if ($point['y'] > min($vertex1['y'], $vertex2['y']) and $point['y'] <= max($vertex1['y'], $vertex2['y']) and $point['x'] <= max($vertex1['x'], $vertex2['x']) and $vertex1['y'] != $vertex2['y']) {
                $xinters = ($point['y'] - $vertex1['y']) * ($vertex2['x'] - $vertex1['x']) / ($vertex2['y'] - $vertex1['y']) + $vertex1['x'];
                if ($xinters == $point['x']) { // Check if point is on the polygon boundary (other than horizontal)
                    return "boundary";
                }
                if ($vertex1['x'] == $vertex2['x'] || $point['x'] <= $xinters) {
                    $intersections++;
                }
            }
        }
        // If the number of edges we passed through is odd, then it's in the polygon.
        if ($intersections % 2 != 0) {
            return "inside";
        } else {
            return "outside";
        }
    }

    function pointOnVertex($point, $vertices) {
        foreach($vertices as $vertex) {
            if ($point == $vertex) {
                return true;
            }
        }

    }

    function pointStringToCoordinates($pointString) {
        $coordinates = explode(" ", $pointString);
        return array("x" => $coordinates[0], "y" => $coordinates[1]);
    }

}
