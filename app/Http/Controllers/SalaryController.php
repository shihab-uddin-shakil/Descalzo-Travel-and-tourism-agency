<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SalaryController extends Controller
{
    public function payment()
    {
        $this->data['mode']='find';
        $this->data['employee']=Employee::all();
       return view('Payment.salary', $this->data);
    }
    public function find(Request $request)
    {
        $pay=$request->all();
        if ( Salary::create($pay)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'activity'=>'Employee salary paid',
                'description'=> $request->amount.' taka  paid to '.$request->account.' number acccount paid by '.Auth::user()->name
            ];
            $history=[
                'employee_id'=> $request->user_id,
                'description'=> $request->amount.' taka  paid to '.$request->account.' number acccount paid by '.Auth::user()->name
            ];
            Transaction::create($transaction);

            Session::flash('message',"Payment Complited  Successfully..");
         }
         else {
             Session::flash('message',"Payment not Completed user account dont' match .");
         }



         return redirect()->to('payments');
       //return view('Payment.salary', $this->data);
    }
}