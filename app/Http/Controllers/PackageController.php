<?php

namespace App\Http\Controllers;

use App\Models\Pakage;
use App\Models\Transaction;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function index()
    {
        $pakg=Pakage::all();
        try{
            return response()->json([
                'success'=>true,
                'package'=>$pakg
            ]);

        }catch(Exception $ex){
            return response()->json([
                'success'=>false,
                'message'=>$ex->getMessage()

            ]);

        }

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
        $validator=Validator::make($request->all(),[
            "title"=>'required|min:3'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success'=>false,
                'message'=>$validator->errors()->all()
            ]);
          }
          else {
            try {
                $this->validate($request,[
                    "title"=>'required|min:4'
                ]);
                $titleData=$request->all();
        if (Pakage::create($titleData)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'Pacakege created',
                'description'=> $request->title.'  pacakage created by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            return response()->json([
                'success'=>true,
                'message'=>'Pacakage Successfully created',
                'package'=>$titleData
            ]);
        }
        else {
            return response()->json([
                'success'=>false,
                'message'=>"Pacakage not created"
            ]);
        }

        } catch (ValidationException $th) {
            //throw $th;
            return response()->json([
                'success'=>false,
                'message'=>$th->getMessage()
            ]);
        }


  }


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
        try {
            if (Pakage::find($id)->delete()) {
                $transaction=[
                    'user_id'=>Auth::user()->id,
                    'user'=>Auth::user()->name,
                    'activity'=>'Pacakage  deleted',
                    'description'=> ' Pacakage  deleted by '.Auth::user()->name


                ];
                Transaction::create($transaction);


            return response()->json([
                'success' => true,
                'message' => 'Yay! Pacakage has been successfully removed!',
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Error! Pacakage Not removed!',
            ]);
        }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Oops! Unable to delete this Employee Category.',
                'error'=>$e->getMessage()
            ]);
        }
    }
}
