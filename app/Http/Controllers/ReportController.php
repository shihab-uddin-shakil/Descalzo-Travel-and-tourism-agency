<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Transaction;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    public function index()
{
    $repo =Report::all();
    try {
       // $users = app('db')->table('users')->get();
        return response()->json([
            'success' => true,
            'users'   => $repo
        ], 200);
    } catch (Exception $ex) {
        return response()->json([
            'success'=>false,
            'message'=>$ex->getMessage(),
        ]);
     }
    // $this->data['reports']=
    // return view('EmployeeUser.report',$this->data);
}
    public function edit($id)
    {
       // $this->data['user']=Employee::findOrFail($id);
    //    $this->data['user']= Tourist::findOrFail($id);
        //$user->status=1;
        try {
            if (Report:: where('id',$id)->update(['status'=>1])) {
                $transaction=[
                    'user_id'=>Auth::user()->id,
                    'user'=>Auth::user()->name,
                    'activity'=>' REPORT ACCEPTED ',
                    'description'=> '# '.$id.' Number Report aaccepted by '.Auth::user()->name


                ];
                Transaction::create($transaction);


             return response()->json([
                 'success'=>true,
                 'message'=> "Yes! Report acivate successfully"
             ]);
            }
        else {
         return response()->json([
             'success'=>false,
             'message'=> "Error! Reprt Not  acivate"
         ]);
        }


     }catch(Exception $ex){
         return response()->json([
             'success'=>false,
             'message'=>$ex->getMessage()

         ]);

     }



        // return redirect()->to('report');
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
        try {
            if ( Report::find($id)->delete()) {
                $transaction=[
                    'user_id'=>Auth::user()->id,
                    'user'=>Auth::user()->name,
                    'activity'=>' Report Deleted ',
                    'description'=> '# '.$id.' Number Reportr deleted by '.Auth::user()->name


                ];
                Transaction::create($transaction);
                return response()->json([
                    'success' => true,
                    'message' => 'Yay! Report has been successfully removed!',
                ]);
            }
            else {
                return response()->json([
                    'success' => false,
                    'message' => 'error! Reprt not removed!',
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),

            ]);
        }


    }
}