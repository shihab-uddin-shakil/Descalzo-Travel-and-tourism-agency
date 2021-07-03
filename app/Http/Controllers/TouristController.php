<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Tourist;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TouristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $this->data['mode']='edit';
        $this->data['tourists']=Tourist::all();
        return view('Tourist.tourist',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $this->data['user']=Employee::findOrFail($id);
    //    $this->data['user']= Tourist::findOrFail($id);
        //$user->status=1;

        Tourist:: where('id',$id)->update(['status'=>1]);
        $transaction=[
            'user_id'=>Auth::user()->id,
            'user'=>Auth::user()->name,
            'activity'=>' Tourist  user active ',
            'description'=> '# '.$id.' Number Tourist  user  active by '.Auth::user()->name


        ];
        Transaction::create($transaction);

        return redirect()->to('tourist');
        // if ( $user->save()) {
        //     Session::flash('message',"Tourist Updated Successfully..");
        //  }
        //  else {
        //      Session::flash('message',"Tourist not Updated .");
        //  }
        //  return redirect()->to('tourist');
        // return view('Tourist.form',$this->data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Tourist:: where('id',$id)->update(['status'=>0]);
        $transaction=[
            'user_id'=>Auth::user()->id,
            'user'=>Auth::user()->name,
            'activity'=>' Tourist  user Deactive ',
            'description'=> $id.' Number Tourist  user Dactive by '.Auth::user()->name


        ];
        Transaction::create($transaction);
        return redirect()->to('tourist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->data['user']= Tourist::findOrFail($id);
        if ( Tourist::find($id)->delete()) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>' Tourist  user Deleted ',
                'description'=> '# '.$id.' Number Tourist  user deleted by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            Session::flash('message',"Tourist Deleted Successfully..");
         }
         else {
             Session::flash('message',"Tourist not  Delet .");
         }
         return redirect()->to('tourist');
    }
}
