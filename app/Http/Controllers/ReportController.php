<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Report;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
=======
use App\Http\Requests\ReportRequest;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> f55aa5ce7f9acfdf056cfcf635728cc7366e1f58
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
<<<<<<< HEAD
    public function index()
{
   // $this->data['mode']='edit';
    $this->data['reports']=Report::all();
    return view('EmployeeUser.report',$this->data);
}
    public function edit($id)
    {
       // $this->data['user']=Employee::findOrFail($id);
    //    $this->data['user']= Tourist::findOrFail($id);
        //$user->status=1;

        Report:: where('id',$id)->update(['status'=>1]);
        $transaction=[
            'user_id'=>Auth::user()->id,
            'user'=>Auth::user()->name,
            'activity'=>' REPORT ACCEPTED ',
            'description'=> '# '.$id.' Number Report aaccepted by '.Auth::user()->name


        ];
        Transaction::create($transaction);



        return redirect()->to('report');
        // if ( $user->save()) {
        //     Session::flash('message',"Tourist Updated Successfully..");
        //  }
        //  else {
        //      Session::flash('message',"Tourist not Updated .");
        //  }
        //  return redirect()->to('tourist');
        // return view('Tourist.form',$this->data);

    }
    public function destroy($id)
    {
        $this->data['user']= Report::findOrFail($id);
        if ( Report::find($id)->delete()) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>' Report Deleted ',
                'description'=> '# '.$id.' Number Reportr deleted by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            Session::flash('message',"Report Deleted Successfully..");

         }
         else {
             Session::flash('message',"Report not  Delet .");
         }
         return redirect()->to('report');
    }
}
=======
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
>>>>>>> f55aa5ce7f9acfdf056cfcf635728cc7366e1f58
