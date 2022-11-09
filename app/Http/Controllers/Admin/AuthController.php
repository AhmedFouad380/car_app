<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{

    public function login(Request $request){
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt(['phone' => $request->phone, 'password' => $request->password])) {

            return redirect('/');

        }
        return back()->with('message','عفوا رقم الهاتف او كلمة المرور خطا ');

    }
}
