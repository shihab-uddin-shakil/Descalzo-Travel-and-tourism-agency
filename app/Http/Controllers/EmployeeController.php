<?php

namespace App\Http\Controllers;
use App\Models\Maintaince;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Employee_Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['employees']=Employee::all();
        return view('EmployeeUser.UserList',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['mode']='create';
        $this->data['groups']=Employee_Category::categoryArray();
     return view('EmployeeUser.CreateUser',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $data= $request->all();
       // $data['category_id']=$request['group'];
    //  return $data;
        if ( Employee::create($data)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>' New Employee Added',
                'description'=> $request->name.'  user employee added by '.Auth::user()->name


            ];
            Transaction::create($transaction);

         Session::flash('message',"Employee Created Successfully..");
      }
      else {
          Session::flash('message',"Employee  not Created .");
      }


      return redirect()->to('employee');
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
        $this->data['groups']=Employee_Category::categoryArray();
        $this->data['user']= Employee::findOrFail($id);
        $this->data['mode']='edit';
        return view('EmployeeUser.CreateUser',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        $data=$request->all();

        $user=Employee::find($id);
        $user->category_id=$data['category_id'];
        $user->name=$data['name'];
        $user->username=$data['username'];
        $user->phone=$data['phone'];
        $user->email=$data['email'];
        $user->address=$data['address'];
        $user->account=$data['account'];
        $user->salary=$data['salary'];
        $user->password=$data['password'];


        if ( $user->save()) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>' Employee Updated',
                'description'=> $request->name.'  user employee information updated by '.Auth::user()->name


            ];
            Transaction::create($transaction);
         Session::flash('message',"Employee Updated Successfully..");
      }
      else {
          Session::flash('message',"EMPLOYEE not Updated .");
      }
      return redirect()->to('employee');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->data['user']= Employee::findOrFail($id);
        if ( Employee::find($id)->delete()) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'  Employee Deleted',
                'description'=> '# '.$id.' Number employee deleted by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            Session::flash('message',"Employee Deleted Successfully..");
         }
         else {
             Session::flash('message',"Employee not  Delet .");
         }
         return redirect()->to('employee');
    }
  
    public function maintaince(){
        return view('employee.maintaince');
    }
    public function submit(Request $req){
        $data= $req->all();
        Maintaince::create($data);
        return redirect ('/maintaince');
    }

    
}