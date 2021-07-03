<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function vehicle(){
        return View('vehicle.vehicle');
    }
    public function submit(Request $req){
        $data= $req->all();
        Vehicle::create($data);
        return redirect ('/vehicle');
    }

}
