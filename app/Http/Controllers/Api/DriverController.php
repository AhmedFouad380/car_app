<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use JWTAuth;
use IlluminateHttpRequest;
use AppHttpRequestsRegisterAuthRequest;
use TymonJWTAuthExceptionsJWTException;
use SymfonyComponentHttpFoundationResponse;

class DriverController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|min:11',
            'password'=>'required',
            'device_token' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $count = Driver::where('phone', $request->phone)->count();

        $jwt_token = null;
        if ($count == 0) {
            return response()->json(msgdata($request, error(), 'phone_wrong', (object)[]));
        } elseif (!$jwt_token = auth('driver')->attempt(['phone'=>$request->phone,'password'=>$request->password], ['exp' => Carbon::now()->addDays(7)->timestamp])) {
            return response()->json(msgdata($request, error(), 'password_wrong', (object)[]));
        } else {
            $user = Auth::guard('driver')->user();
            if($user->is_active == 'active'){
                $user->fcm_token = $request->device_token;
                $user->save();
                $user->token = $jwt_token;
                return response()->json(msgdata($request, success(), 'success', $user));
            }else{
                return response()->json(msgdata($request, error(), 'not_active', (object)[]));
            }

        }
    }

}
