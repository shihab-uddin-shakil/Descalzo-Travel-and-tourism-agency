<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index(){
        $tr=Transaction::all();
        try {
            // $users = app('db')->table('users')->get();
             return response()->json([
                 'success' => true,
                 'transactions'   => $tr
             ], 200);
         } catch (Exception $ex) {
             return response()->json([
                 'success'=>false,
                 'message'=>$ex->getMessage(),
             ]);
    }}
    public function Transaction()
    {
        // $this->data['profit']=DB::table('payments')->sum('amount')-DB::table('salaries')->sum('amount');



        $tr=Transaction::all();
        try{
            return response()->json([
                'success'=>true,
                'transactions'=>$tr
            ],200);

        }catch(Exception $ex){
            return response()->json([
                'success'=>false,
                'message'=>$ex->getMessage()

            ]);

        }
    }
 public function profit()
 {
    $this->data['employee']=DB::table('employees')->count('id');
    $this->data['earn']=DB::table('payments')->sum('amount');
    $this->data['pay']=DB::table('salaries')->sum('amount');
    $this->data['profit']=DB::table('payments')->sum('amount')-DB::table('salaries')->sum('amount');
    return view('main.dashboard',$this->data);
 }
 public function dashboard()
 {
    $this->data['employee']=DB::table('employees')->count('id');
    $this->data['earn']=DB::table('payments')->sum('amount');
    $this->data['pay']=DB::table('salaries')->sum('amount');
    $this->data['profit']=DB::table('payments')->sum('amount')-DB::table('salaries')->sum('amount');
    return  response()->json([
        'success'=>true,
        'data'=>$this->data,
    ]);
 }

}