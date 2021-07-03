<?php

namespace App\Http\Controllers\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\TouristLoginRequest;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\Tourist;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view ('admin.login.index');
    }
    public function registration()
    {
        return view ('admin.login.registration');
    }
    public function registrationVerify(UserRequest $reg)
    {
        //$tourist = new Tourist;
        //$data = $reg->only(['name','username','email','password']);
        // $data['password'] = Hash::make($reg->get('password'));
        //Tourist::create($data);
        $newImageName = time().'-'.$reg->username.'.'.$reg->image->extension();
        $reg->image->move(public_path('images'),$newImageName);
        $user = Tourist::create([
            'name'=>$reg->input('name'),
            'username'=>$reg->input('username'),
            'email'=>$reg->input('email'),
            'password'=>$reg->input('password'),
            'image'=>$newImageName
        ]);
        $reg->session()->put('email',$reg->email);
        return redirect('/login');
    }

    public function verify(TouristLoginRequest $reg)
    {
        $result = Tourist::where('email',$reg->email)
                            ->where('password',$reg->password)
                            ->get();
        
        if(count($result)>0)
        {
            $reg->session()->put('email',$reg->email);
            return redirect('/home');
        }
        else{
            $reg->session()->flash('msg','invalid data!');
            return redirect('login');
        }
        //$email = $reg->session()->get('email');
        // $validation=Validator::make($reg->all(),[
        //     'email'=>'required',
        //     'password'=>'required'
        // ]);
        // $reg->validate([
        //     'email'=>'required',
        //     'password'=>'required'
        // ])->validate();

        // if($validation->fails())
        // {
        //     return redirect('/')->with('errors',$validation->errors());
        // }
        // $data=$reg->only(['email','password']);
        // if(Auth::attempt($data)){
        //     return redirect()->intended('/home');
        // }
        // else{
        //     return redirect()->route('login')->withErrors(['Email OR password Is invalid!']);
        // }
        
        // if($reg->email == $reg->password)
        // {
        //     $reg->session()->put('email',$reg->email);
        //     return redirect('/home');
        // }
        // else{
        //     // $reg->session()->flash('msg','invalid data!');
        //     // return redirect('login');
        // } 
    }

   
}
