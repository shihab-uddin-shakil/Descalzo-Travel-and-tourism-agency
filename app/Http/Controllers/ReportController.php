<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    public function report(){
        $this->data['reports']=report::all();
        return view('report',$this->data);
    
   

}
public function create(){
    return view ('reportlist');
}
  public function store(ReportRequest $req){
    //    return $req->all();
       $report=[
           'employee_id'=>1,
                    'type'=>$req->type,
                    'description'=> $req->description,
                    'status'=> 0
                ];

                report::create($report);
                return redirect()->to('report');

  }
    
}
