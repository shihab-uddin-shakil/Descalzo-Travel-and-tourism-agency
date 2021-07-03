<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller

{
    public function index()
{
   // $this->data['mode']='edit';
    $this->data['reviews']=Review::all();
    return view('Tourist.review',$this->data);
}
    public function edit($id)
    {
       // $this->data['user']=Employee::findOrFail($id);
    //    $this->data['user']= Tourist::findOrFail($id);
        //$user->status=1;

        Review:: where('id',$id)->update(['status'=>1]);
        $transaction=[
            'user_id'=>Auth::user()->id,
            'user'=>Auth::user()->name,
            'activity'=>' Tourist Review Approved ',
            'description'=> '# '.$id.' Number Review approved by '.Auth::user()->name


        ];
        Transaction::create($transaction);


        return redirect()->to('review');
        // if ( $user->save()) {
        //     Session::flash('message',"Tourist Updated Successfully..");
        //  }
        //  else {
        //      Session::flash('message',"Tourist not Updated .");
        //  }
        //  return redirect()->to('tourist');
        // return view('Tourist.form',$this->data);

    }

}