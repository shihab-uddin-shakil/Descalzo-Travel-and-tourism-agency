<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use App\Models\SalaryHistory;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Validator;

class SalaryController extends Controller
{
    // public function payment()
    // {
    //     $this->data['mode']='find';
    //     $this->data['employee']=Employee::all();
    //    return view('Payment.salary', $this->data);
    // }
    public function history()
    {
    //    $this->data['historys']=
    //    return view('Payment.history',$this->data);
       $history=SalaryHistory::all();
       try{
           return response()->json([
               'success'=>true,
               'history'=>$history
           ]);

       }catch(Exception $ex){
           return response()->json([
               'success'=>false,
               'message'=>$ex->getMessage()

           ]);

       }
    }

    // public function employee()
    // {
    //    $this->data['historys']=SalaryHistory::all();
    //    return view('Payment.history',$this->data);
    // }
public function find(Request $request)
{
    $validator= Validator::make($request->all(),[

        'user_id'     => 'required',
        'amount'    => 'required',
        'account' => 'required|min:4|max:20',

    ]);

if ($validator->fails()) {
return response()->json([
    'success'=>false,
    'message'=>$validator->errors()->all()
]);
}
else {
    try {

        // $Data=$request->all();

        $pay=$request->all();
    if ( Salary::create($pay)) {
        $transaction=[
            'user_id'=>Auth::user()->id,
            'user'=>Auth::user()->name,
            'activity'=>'Employee salary paid',
            'description'=> $request->amount.' taka  paid to '.$request->account.' number acccount paid by '.Auth::user()->name
        ];
        Transaction::create($transaction);
        $history=[
            'employee_id'=> $request->user_id,
            'amount'=>$request->amount,
            'description'=> $request->amount.' taka  paid to '.$request->account.' number acccount paid by '.Auth::user()->name
        ];
        SalaryHistory::create($history);

            return response()->json([
                'success'=>true,
                'message'=>'Employee salary paid Successfully created',
            ],200);
        }
        else {
            return response()->json([
                'success'=>false,
                'message'=>"Employee salary not paid"
            ]);
        }

        } catch (Exception $th) {
            //throw $th;
            return response()->json([
                'success'=>false,
                'message'=>$th->getMessage()
            ]);
        }
        }
}

}