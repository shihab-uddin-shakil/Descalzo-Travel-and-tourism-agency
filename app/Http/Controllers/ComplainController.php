<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\ReplyComplain;
use App\Models\Transaction;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComplainController extends Controller
{
   public function complain()
   {
    // $com= DB::table('complains')->where('recever_id',
    // Auth::user()->id)->get();
    $com=Complain::where('recever_id',
    Auth::user()->id)->get();
    try {
       // $users = app('db')->table('users')->get();
        return response()->json([
            'success' => true,
            'complains'   => $com,
        ], 200);
    } catch (Exception $ex) {
        return response()->json([
            'success'=>false,
            'message'=>$ex->getMessage(),
        ]);
     }

    //   $this->data['complains']=
    //   return view('Tourist.complain',$this->data);
   }
   public function edit($id)
    {
       // $this->data['mode']="rp";

        $this->data['complain']= Complain::findOrFail($id);
        //$this->data['mode']='edit';
        return view('Tourist.form',$this->data);
    }
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                "message"=>'required|min:4'
            ]);
            $titleData=$request->all();

            if (  ReplyComplain::create($titleData)) {
                $transaction=[
                    'user_id'=>Auth::user()->id,
                    'user'=>Auth::user()->name,
                    'activity'=>'Reply comlin',
                    'description'=> 'this message:' .$request->message .'  reply to user Replied by: '.Auth::user()->name


                ];
                Transaction::create($transaction);
                return response()->json([
                    'success'=>true,
                    'emessage'=>'Message Replied  Successfully ',

                ]);
            }
            else {
                return response()->json([
                    'success'=>false,
                    'emessage'=>"Message  not Replied "
                ]);
            }

            } catch (ValidationException $th) {
                //throw $th;
                return response()->json([
                    'success'=>false,
                    'emessage'=>$th->getMessage()
                ]);
            }



    //     if ( $user->save()) {
    //         $transaction=[
    //             'user_id'=>Auth::user()->id,
    //             'user'=>Auth::user()->name,
    //             'activity'=>' Employee Updated',
    //             'description'=> $request->name.'  user employee information updated by '.Auth::user()->name


    //         ];
    //         Transaction::create($transaction);
    //      Session::flash('message',"Employee Updated Successfully..");
    //   }
    //   else {
    //       Session::flash('message',"EMPLOYEE not Updated .");
    //   }


    }
}