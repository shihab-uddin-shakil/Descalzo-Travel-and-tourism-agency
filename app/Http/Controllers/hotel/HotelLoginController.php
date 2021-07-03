<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\HotelLoginRequest;
use App\Models\Hotel_Owner;

class HotelLoginController extends Controller
{
    public function index()
    {
        return view('hotel.index');
    }
    public function verify(HotelLoginRequest $reg)
    {
        $result = Hotel_Owner::where('email',$reg->email)
                            ->where('password',$reg->password)
                            ->get();
        
        if(count($result)>0)
        {
            $reg->session()->put('email',$reg->email);
            return redirect('admin.main.dashboard');
        }
        else{
            $reg->session()->flash('msg','invalid data!');
            return redirect('login.index');
        }
    }
}
