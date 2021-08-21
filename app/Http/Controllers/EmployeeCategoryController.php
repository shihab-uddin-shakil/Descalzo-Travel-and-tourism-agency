<?php

namespace App\Http\Controllers;

use App\Models\Employee_Category;
use App\Models\Transaction;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EmployeeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee_category=Employee_Category::all();
        try{
            return response()->json([
                'success'=>true,
                'employee_category'=>$employee_category
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
        return view('EmployeeGroup.create');
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
            "title"=>'required|min:4'
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

        if (  Employee_Category::create($titleData)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'Employee category created',
                'description'=> $request->title.'  category created by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            return response()->json([
                'success'=>true,
                'message'=>'Employe category Successfully created',
                'employee_category'=>$titleData
            ]);
        }
        else {
            return response()->json([
                'success'=>false,
                'message'=>"employe category not created"
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
            Employee_Category::find($id)->delete();
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'Employee category deleted',
                'description'=> ' category deleted by '.Auth::user()->name
            ];
            Transaction::create($transaction);
            return response()->json([
                'success' => true,
                'message' => 'Yay! Employee  Category has been successfully removed!',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Oops! Unable to delete this Employee Category.',
                'error'=>$e->getMessage()
            ]);
        }
    }
}