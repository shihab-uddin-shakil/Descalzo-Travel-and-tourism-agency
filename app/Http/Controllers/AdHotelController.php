<?php

namespace App\Http\Controllers;
use App\Models\AdHotel;

use Illuminate\Http\Request;

class AdHotelController extends Controller
{
    public function index()
    {
        return view('employee.employeelist');
    }
  
    public function adHotel(){
        return view('employee.adHotel');
    }
    public function submit(Request $req){
        $data= $req->all();
        AdHotel::create($data);
        return redirect ('/adHotel');
    }
}
