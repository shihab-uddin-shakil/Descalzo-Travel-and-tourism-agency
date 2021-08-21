<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\AuthCode;
use Laravel\Passport\HasApiTokens;
use App\Http\Controllers\API\BaseController;
use Exception;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login']]);
    // }

    public function Login()
    {
      return view('login.index');
    }
    public function confirm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'=>'required|email|exists:admins,email',
            'password'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success'=>false,
                'message'=>$validator->errors()->all()
            ]);

        }else {
            $formData=$request->only('email','password');
            if(Auth::attempt($formData)){
                // $this->data['profit']=DB::table('payments')->sum('amount')-DB::table('salaries')->sum('amount');
                //return redirect()->intended('/dashboard');
                // Auth::viaRemember();
                // Auth::user()->setRememberToken("fkjdsfklsdklfsdlfskjkjkkjkjkhjj");
                $token=auth()->user()->createToken('accessToken')->accessToken;
                $user             = Auth::user();
                return response()->json([
                    'success'=>true,
                    'message'=>"Successfully Login..",
                    'token'=>  $token,
                     'user'=>$user


                ]);
            }
            else{

                return response()->json([
                    'success'=>false,
                    'message'=>"Unauthorized"
                ]);
               // return redirect()->route('login')->withErrors(['Email OR password Is invalid!']);
            }
        }

      //return view('login.index');
    }
    public function logout()
    {

        try{
           // $this->guard()->logout();

           // Auth::guard('api')->logout();
            // Auth::guard(‘web’)->logout();
            $user = Auth::user()->token();
            $user->revoke();
            $user=Auth::guard('api');
            // auth()->user()->logout();
           Auth::logout();
            return response()->json([
                'success'=>true,
                'message'=>"Successfully logout.."
            ]);

        }catch(Exception $ex){
            return response()->json([
                'success'=>false,
                'message'=>$ex->getMessage()

            ]);
        }
    }


    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success'=>false,
                'message'=>$validator->errors()->all()
            ]);

        }
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user             = Auth::user();
            $success['name']  = $user->name;
           // $token = auth()->user()->getRememberToken('accessToken');
            $token2 = auth()->user()->createToken('Laravel8PassportAuth')->accessToken;
            return response()->json([
                'success'=>true,
                'message'=>app('auth')->attempt($request->only('email', 'password')),
               // 'token'=>AuthCode::user()
               'token'=>$token2,

            ]);
        } else {
             return response()->json([
                'success'=>false,
                'message'=>"unauthorized"
            ]);
    }
}
}