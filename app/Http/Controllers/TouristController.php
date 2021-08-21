<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Tourist;
use App\Models\Transaction;
use Exception;
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
       $tourist =Tourist::all();
       try {
          // $users = app('db')->table('users')->get();
           return response()->json([
               'success' => true,
               'users'   => $tourist
           ], 200);
       } catch (Exception $ex) {
           return response()->json([
               'success'=>false,
               'message'=>$ex->getMessage(),
           ]);
        }
        // $this->data['tourists']=
        // return view('Tourist.tourist',$this->data);
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
       try {
           if ( Tourist:: where('id',$id)->update(['status'=>1])) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>' Tourist  user active ',
                'description'=> '# '.$id.' Number Tourist  user  active by '.Auth::user()->name


            ];
            Transaction::create($transaction);

            return response()->json([
                'success'=>true,
                'message'=> "Yes! Tourist acivate successfully"
            ]);
           }
       else {
        return response()->json([
            'success'=>false,
            'message'=> "Error! Tourist Not  acivate"
        ]);
       }


    }catch(Exception $ex){
        return response()->json([
            'success'=>false,
            'message'=>$ex->getMessage()

        ]);

    }

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
        try {
            if ( Tourist:: where('id',$id)->update(['status'=>0])) {
                $transaction=[
                    'user_id'=>Auth::user()->id,
                    'user'=>Auth::user()->name,
                    'activity'=>' Tourist  user Deactive ',
                    'description'=> $id.' Number Tourist  user Dactive by '.Auth::user()->name


                ];
                Transaction::create($transaction);

             return response()->json([
                 'success'=>true,
                 'message'=> "Yes! Tourist Deacivate successfully"
             ]);
            }
        else {
         return response()->json([
             'success'=>false,
             'message'=> "Error! Tourist Not  Deacivate"
         ]);
        }


     }catch(Exception $ex){
         return response()->json([
             'success'=>false,
             'message'=>$ex->getMessage()

         ]);


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->data['user']= Tourist::findOrFail($id);
        try {
            if ( Tourist::find($id)->delete()) {
                $transaction=[
                    'user_id'=>Auth::user()->id,
                    'user'=>Auth::user()->name,
                    'activity'=>' Tourist  user Deleted ',
                    'description'=> '# '.$id.' Number Tourist  user deleted by '.Auth::user()->name


                ];
                Transaction::create($transaction);
                return response()->json([
                    'success' => true,
                    'message' => 'Yay! Tourist account has been successfully removed!',
                ]);
            }
            else {
                return response()->json([
                    'success' => false,
                    'message' => 'error! Tourist account not removed!',
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