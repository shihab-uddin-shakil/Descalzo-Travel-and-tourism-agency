<?php

namespace App\Http\Controllers;

use App\Models\Pakage;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function index()
    {
        $this->data['packeges']=Pakage::all();
        return view('Tourist.plist',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tourist.pform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titleData=$request->all();
        if (  Pakage::create($titleData)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'Pacakege created',
                'description'=> $request->title.'  pacakage created by '.Auth::user()->name


            ];
            Transaction::create($transaction);


           Session::flash('message',"Pacakage Created Successfully..");
        }
        else {
            Session::flash('message',"Pacakage   not Created .");

        }
        return redirect()->to('packeges');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Pakage::find($id)->delete()) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'Pacakage  deleted',
                'description'=> ' Pacakage  deleted by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            Session::flash('message',"Pacakage   Deleted Successfully..");
         }
         else {
             Session::flash('message',"Pacakage  not Deleted .");
         }

         return redirect()->to('packeges');
    }
}