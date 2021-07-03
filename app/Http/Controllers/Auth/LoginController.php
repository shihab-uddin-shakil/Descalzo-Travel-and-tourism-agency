<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function Login()
    {
      return view('login.index');
    }
    public function confirm(LoginRequest $request)
    {

        $formData=$request->only('email','password');
        if(Auth::attempt($formData)){
            // $this->data['profit']=DB::table('payments')->sum('amount')-DB::table('salaries')->sum('amount');
            return redirect()->intended('/dashboard');
        }
        else{
            return redirect()->route('login')->withErrors(['Email OR password Is invalid!']);
        }
      //return view('login.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}