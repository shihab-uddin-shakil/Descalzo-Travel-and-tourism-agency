<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Tourist;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function hotelList()
    {
        return view('Tourist.listing');
    }
    public function hotelSingleList()
    {
        return view('Tourist.listing-single');
    }
    public function hotelSingleListShow(Request $reg, $id)
    {
        $email = $reg->session()->get('email');
        $data = Tourist::where('email',$email)->first();
        $hotel = Hotel::find($id);
        return view('Tourist.listing-single')->with('hotel',$hotel)->with('data',$data);
    }
    public function contacts()
    {
        return view('Tourist.contacts');
    }
    public function blogs()
    {
        return view('Tourist.blog');
    }
    public function blogSingle()
    {
        return view('Tourist.blog-single');
    }
    
}
