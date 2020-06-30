<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{

    public function register(Request $request)
    {
        $v = Validator::make($request->all(), [
            'corp_name' => 'required',
            'second_input' => 'required',
            'post_address' => 'required',
            'hello' => 'required',
            'third_input' => 'required',
            'tel' => 'required',
            'fax' => 'required',
            'email_address' => 'required|email|unique:users',
            'register_pwd'  => 'min:6|required_with:confirm_pwd|same:confirm_pwd',
            'confirm_pwd' => 'required',
            'contact_address' => 'required'
        ]);
        if ($v->fails())
        {
            return response()->json([
                'error' => 'registration_validation_error',
                'errors' => $v->errors()
            ], 422);
        }
        $digits = 4;
        do {
            $digits_number = rand(pow(10, $digits-1), pow(10, $digits)-1);
            $member_cnt = DB::table('users')->select('member_id')->where('member_id', '=',$digits_number)->get()->count();
        }while ($member_cnt <> 0);
        if($fb = fopen("debug.txt","w")){
            fwrite($fb,$member_cnt . $digits_number);
            fclose($fb);
        }           
        $user = new User;
        $user->member_id = $digits_number;
        $user->corp_name = $request->corp_name;
        $user->second_input = $request->second_input;
        $user->post_address = $request->post_address;
        $user->hello = $request->hello;
        $user->third_input = $request->third_input;
        $user->tel = $request->tel;
        $user->fax = $request->fax;
        $user->email_address = $request->email_address;
        $user->password = bcrypt($request->register_pwd);
        $user->contact_address = $request->contact_address;
        $user->meeting_part = $request->meeting_part;
        $user->save();
     
        return response()->json([
            'status' => 'success',
            'member_id' => $digits_number 
        ], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('member_id','password');
        if ($token = $this->guard()->attempt($credentials)) {
            return response()->json(['status' => 'success'], 200)->header('Authorization', $token);
        }
	
        return response()->json(['error' => 'login_error'], 401);
    }

    public function logout()
    {
        $this->guard()->logout();

        return response()->json([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }

    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);

        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }

    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }

        return response()->json(['error' => 'refresh_token_error'], 401);
    }

    private function guard()
    {
        return Auth::guard();
    }
}

