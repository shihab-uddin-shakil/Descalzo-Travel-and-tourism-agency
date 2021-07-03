<?php

namespace App\Http\Controllers\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Tourist;

class BookHotelController extends Controller
{
    public function index(Request $reg, $id)
    {
        $email = $reg->session()->get('email');
        $data = Tourist::where('email',$email)->first();
        $hotel = Hotel::find($id);
        return view('Tourist.booking-single')->with('hotel',$hotel)->with('data',$data);
        //,compact('data'));
    }
    public function store(Request $reg,$id)
    {
        $hotel = Hotel::find($id)->all();
        $email = $reg->session()->get('email');
        $data = Tourist::where('email',$email)->first();
        $user = Booking::create([
            'name'=>$reg->input('name'),
            'amount'=>$reg->input('price'),
            'tour_id'=>$reg->input('hid'),
            'tourist_id'=>$reg->input('tid'),
            'destination'=>$reg->input('address')
        ]);
        return redirect('/home');
        
    }
}
