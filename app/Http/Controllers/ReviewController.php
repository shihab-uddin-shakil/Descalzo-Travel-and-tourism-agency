<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller

{
    public function index()
{
    $rev =Review::all();
    try {
       // $users = app('db')->table('users')->get();
        return response()->json([
            'success' => true,
            'users'   => $rev
        ], 200);
    } catch (Exception $ex) {
        return response()->json([
            'success'=>false,
            'message'=>$ex->getMessage(),
        ]);
     }
    // $this->data['reviews']=
    // return view('Tourist.review',$this->data);
}
    public function edit($id)
    {
        try {
            if (  Review:: where('id',$id)->update(['status'=>1])) {
                $transaction=[
                    'user_id'=>Auth::user()->id,
                    'user'=>Auth::user()->name,
                    'activity'=>' Tourist Review Approved ',
                    'description'=> '# '.$id.' Number Review approved by '.Auth::user()->name


                ];
                Transaction::create($transaction);

             return response()->json([
                 'success'=>true,
                 'message'=> "Yes! Review acivate successfully"
             ]);
            }
        else {
         return response()->json([
             'success'=>false,
             'message'=> "Error! Review  Not  acivate"
         ]);
        }


     }catch(Exception $ex){
         return response()->json([
             'success'=>false,
             'message'=>$ex->getMessage()

         ]);

     }






        // return redirect()->to('review');
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