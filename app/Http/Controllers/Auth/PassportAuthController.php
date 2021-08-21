<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['generateAccessToken', 'login']]);
    }

    protected function generateAccessToken($user)
    {
        $token = $user->createToken($user->email.'-'.now());

        return $token->accessToken;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if( Auth::attempt($credentials) ) {
            $user = Auth::user();

            $token = $user->createToken($user->email.'-'.now());

            return response()->json([
                'token' => $token->accessToken
            ]);
        }
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
           Auth::user()->AauthAcessToken()->delete();
        }

        return response()->json([
            'msg' => 'Logged out complete'
        ]);
    }
}