<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddHotelRequest;
use App\Models\Hotel;

class AddHotelController extends Controller
{
    public function index()
    {
        return view('hotel.index');
    }
    public function create(AddHotelRequest $reg)
    {
        $newImageName = time().'-'.$reg->name.'.'.$reg->image->extension();
        $reg->image->move(public_path('hotels'),$newImageName);
        $user = Hotel::create([
            'name'=>$reg->input('name'),
            'details'=>$reg->input('details'),
            'address'=>$reg->input('address'),
            'email'=>$reg->input('email'),
            'phone'=>$reg->input('phone'),
            'website'=>$reg->input('website'),
            'price'=>$reg->input('price'),
            'image'=>$newImageName
        ]);
        
        return redirect('/add-hotel');
    }
    // public function view()
    // {
    //     $data = Hotel::all();
    //     return redirect('/home',compact('data'));
    // }
}
