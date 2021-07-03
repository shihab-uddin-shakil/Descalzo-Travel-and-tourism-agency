<?php

namespace App\Http\Controllers;
use App\Models\Maintaince;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.employeelist');
    }
  
    public function maintaince(){
        return view('employee.maintaince');
    }
    public function submit(Request $req){
        $data= $req->all();
        Maintaince::create($data);
        return redirect ('/maintaince');
    }

    
}