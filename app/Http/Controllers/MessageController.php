<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function index()
    {
        $mes=Message::all();
        try{
            return response()->json([
                'success'=>true,
                'messages'=>$mes
            ]);

        }catch(Exception $ex){
            return response()->json([
                'success'=>false,
                'message'=>$ex->getMessage()

            ]);

        }
    }

    public function store(Request $request)
    {

        $validator=Validator::make($request->all(),[
            "message"=>'required'
        ]);

  if ($validator->fails()) {
    return response()->json([
        'success'=>false,
        'message'=>$validator->errors()->all()
    ]);
  }
  else {
    try {

        $titleData=$request->all();
          $messagedata=[
            'user_id'=>$request->user_id,
            'message'=>$request->message,

          ];
        if (Message::create($messagedata)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'send message',
                'description'=> $request->message.'  message send by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            return response()->json([
                'success'=>true,
                'message'=>'Send Message successfully',
                'messages'=>$titleData
            ]);
        }
        else {
            return response()->json([
                'success'=>false,
                'error'=>"message not send ",
                'messages'=>$titleData
            ]);
        }

        } catch (Exception $th) {
            //throw $th;
            return response()->json([
                'success'=>false,
                'error'=>$th->getMessage(),
                'messages'=>$titleData
            ]);
        }


  }


    }

}
