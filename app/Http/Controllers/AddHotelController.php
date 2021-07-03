<?php

namespace App\Http\Controllers;
use App\Models\Hotel;

use Illuminate\Http\Request;
use App\Http\Requests\AddHotelRequest;

class AddHotelController extends Controller
{
    public function index(){
        return view('main.addHotel');
    }
    public function create(AddHotelRequest $reg){
        
        $newImageName = time().'-'.$reg->name.'.'.$reg->image->extension();
        $reg->image->move(public_path('images'),$newImageName);
        $user = Hotel::create([
            'name'=>$reg->input('name'),
            'address'=>$reg->input('address'),
            'details'=>$reg->input('details'),
            'price'=>$reg->input('price'),
            'image'=>$newImageName
        ]);
        //$reg->session()->put('email',$reg->email);
        return redirect('/addHotel');
      
    }
}
