<?php

namespace App\Http\Controllers\Auth\Admon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PassportAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin-api', ['except' => ['generateAccessToken', 'login']]);
    }

    protected function generateAccessToken($user)
    {
        $token = $user->createToken($user->email.'-'.now());

        return $token->accessToken;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->Auth::attempt($credentials)) {
            $user = $this->guard()->user();

            $token = $user->createToken($user->email.'-'.now());

            return response()->json([
                'token' => $token->accessToken
            ]);
        }
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
           $this->guard()->user()->AauthAcessToken()->delete();
        }

        return response()->json([
            'msg' => 'Logged out complete'
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
