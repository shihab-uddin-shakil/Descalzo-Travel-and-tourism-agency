<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\ReplyComplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComplainController extends Controller
{
   public function complain()
   {

      $this->data['complains']=DB::table('complains')->where('recever_id',
      Auth::user()->id)->get();
      return view('Tourist.complain',$this->data);
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
        // $this->data['mode']="rppp";

        $data=$request->all();

    //    return $data;
       ReplyComplain::create($data);

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
      return redirect()->to('complains');

    }
}