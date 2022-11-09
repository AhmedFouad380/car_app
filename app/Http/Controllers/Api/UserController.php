<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function logout(Request $request)
    {
        $user = User::find(auth()->id());
        if ($user) {
            $user->device_token = null;
            $user->save();
        }
        auth()->logout(true);
        return response()->json(msgdata($request, token_expired(), 'unauthrized', (object)[]));

    }

    public function unauthrized(Request $request)
    {

        return response()->json(msgdata($request, token_expired(), 'unauthrized', null));

    }

    public function index(Request $request)
    {

        $data = User::Orderby('created_at', 'desc')->paginate(10);

        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function Profile(Request $request)
    {
        $data = User::where('id',auth()->id() )->first();
        return response()->json(msgdata($request, success(), 'success', $data));

    }

    public function sendCode(Request $request){
        $validator = Validator::make($request->all(), [
            'phone' => 'required|min:11',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $count = User::where('phone', $request->phone)->count();

        $jwt_token = null;
        if ($count == 0) {
            return response()->json(msgdata($request, error(), 'phone_wrong', (object)[]));
        }else{
        $data = User::where('phone', $request->phone)->firstOrFail();
        $data->code='1234';
        $data->save();
        return response()->json(msgdata($request, success(), 'success',  (object)[]));

        }
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|min:11',
            'code'=>'required',
            'device_token' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $count = User::where('phone', $request->phone)->count();

        $jwt_token = null;
        if ($count == 0) {
            return response()->json(msgdata($request, error(), 'phone_wrong', (object)[]));
        } elseif (!$jwt_token = JWTAuth::attempt(['phone'=>$request->phone,'code'=>$request->code,'password'=>123456], ['exp' => Carbon::now()->addDays(7)->timestamp])) {
            return response()->json(msgdata($request, error(), 'code_wrong', (object)[]));

        } else {
            $user = Auth::user();
            if($user->is_active == 1){
                $user->device_token = $request->device_token;
                $user->save();
                $user->token = $jwt_token;

                return response()->json(msgdata($request, success(), 'success', $user));
            }else{
                return response()->json(msgdata($request, error(), 'not_active', (object)[]));
            }

        }
    }

    public function Update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phone' => 'min:11|',
            'name' => 'required',
            'email' => 'email',
            'country_id' => 'exists:countries,id',
            'city_id' => 'exists:cities,id',
            'address' => '',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = User::find(auth()->id());
        $data->name = $request->name;
        if (isset($request->phone)) {
            $data->phone = $request->phone;
        }
        if (isset($request->image)) {
            $data->image = $request->image;
        }
        $data->country_id = $request->country_id;
        $data->city_id = $request->city_id;
        $data->address = $request->address;
        if (isset($request->password)) {
            $data->password = Hash::make($request->password);
        }
        $data->save();


        return response()->json(msgdata($request, success(), 'success', $data));


    }

    public function UpdateProject(Request $request)
    {

        $validator = Validator::make($request->all(), [
//            'name' => 'required',
            'project_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $Project = Project::find($request->project_id);
        $Project->name = $request->projectname;
        $Project->area = $request->area;
        $Project->description = $request->description;
        $Project->lat = $request->lat;
        $Project->lng = $request->lng;
        $Project->save();

        return response()->json(msgdata($request, success(), 'success', $Project));

    }

    public function Store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric|min:11|unique:users,phone',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'required|min:6',
            'country_id' => 'exists:countries,id',
            'city_id' => 'exists:cities,id',
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        $data = new User;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->country_id = $request->country_id;
        $data->city_id = $request->city_id;
        $data->is_active = 1;
        if ($request->image) {
            $data->image = $request->image;
        }
        $data->password = Hash::make($request->password);
        $data->save();


        $User = User::find($data->id);
        $input = $request->only('phone', 'password');
        $jwt_token = JWTAuth::attempt($input);
        $User->token = $jwt_token;
        if (isset($request->device_id)) {
            Cart::where('device_id', $request->device_id)->update(['user_id' => $User->id, 'device_id' => null]);
        }
        return response()->json(msgdata($request, success(), 'register_success', $User));


    }

    public function forget_pass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|min:12',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        if (User::where('phone', $request->phone)->count() > 0) {
            $User = User::where('phone', $request->phone)->first();
            ForgetPass::where('user_id', $User->id)->delete();
            $data = new ForgetPass();
            $data->user_id = $User->id;
            $data->code = rand(1111, 9999);
            $data->save();
            $User->code = $data->code;
            $ch = curl_init();
            $url = "http://basic.unifonic.com/rest/SMS/messages";
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "AppSid=ngKAr3bTdAMthOzNZumtHX3DaEuJEx&Body=كود التحقق :" . $data->code . "&SenderID=AMAR-TICK&Recipient=" . $User->phone . "&encoding=UTF8&responseType=json"); // define what you want to post
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            curl_close($ch);
            $user_id = array('user_id' => $User->id);

            return response()->json(msgdata($request, success(), 'code_sent', $user_id));


        } else {
            return response()->json(msgdata($request, error(), 'phone_wrong', (object)[]));

        }
    }

    public function ChangePass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }
        $User = User::find($request->user_id);
        $User->password = Hash::make($request->password);
        $User->save();
        ForgetPass::where('user_id', $request->user_id)->delete();
        return response()->json(msgdata($request, success(), 'success', $User));


    }

    public function confirm_code(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'code' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first(), 'data' => (object)[]]);
        }

        if (ForgetPass::where('user_id', $request->user_id)->where('code', $request->code)->count() > 0) {
            $User = User::find($request->user_id);
            return response()->json(msgdata($request, success(), 'success', (object)[]));

        } else {
            return response()->json(msgdata($request, error(), 'code_expire', (object)[]));

        }
    }

    public function Setting(Request $request)
    {
        $data = Setting::find(1);
        return response()->json(msgdata($request, success(), 'success', $data));

    }


}
