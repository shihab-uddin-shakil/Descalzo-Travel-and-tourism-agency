<?php

namespace App\Http\Controllers;

use App\Models\Employee_Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EmployeeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['ecategories']=Employee_Category::all();
        return view('EmployeeGroup.group',$this->data);
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
        $titleData=$request->all();
        if (  Employee_Category::create($titleData)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'Employee category created',
                'description'=> $request->title.'  category created by '.Auth::user()->name


            ];
            Transaction::create($transaction);

           Session::flash('message',"Emloyee Category Created Successfully..");
        }
        else {
            Session::flash('message',"Emloyee Category   not Created .");

        }
        return redirect()->to('employee_categories');
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
        if (Employee_Category::find($id)->delete()) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'Employee category deleted',
                'description'=> ' category deleted by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            Session::flash('message',"Emloyee Category  Deleted Successfully..");
         }
         else {
             Session::flash('message',"Emloyee Category  not Deleted .");
         }

         return redirect()->to('employee_categories');
    }
}
