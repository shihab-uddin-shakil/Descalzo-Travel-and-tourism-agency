<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Employee_Category;
use App\Models\Transaction;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->data['employees']
         $employees =Employee::all();
        try {
           // $users = app('db')->table('users')->get();
            return response()->json([
                'success' => true,
                'users'   => $employees
            ], 200);
        } catch (Exception $ex) {
            return response()->json([
                'success'=>false,
                'message'=>$ex->getMessage(),
            ]);
        }

       // return view('EmployeeUser.UserList',$this->data);
      // return $this->data;
    }
    public function userStore(Request $request)
    {
        try {
            $this->validate($request,[
                'name'     => 'required|min:4|max:40',
                'email'    => 'required|email',
                'username' => 'required|min:6|max:20',
                'password' => 'required|between:6,12',
            ]);
        } catch (ValidationException $ex) {
            return response()->json([
                'success'=>false,
                'message'=>$ex->getMessage(),
            ]);
        }

        try {
            $data= $request->all();
            Employee::create($data);
            return response()->json([
                'message'=>'succesfully employee created',
                'employee'=>$data,
            ],200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 422);
        }
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
    public function store(Request $request)
    {
         $validator= Validator::make($request->all(),[

        'name'     => 'required|min:4|max:40',
        'email'    => 'required|email',
        'username' => 'required|min:4|max:20',
        'password' => 'required|between:6,12',
    ]);

if ($validator->fails()) {
return response()->json([
    'success'=>false,
    'message'=>$validator->errors()->all()
]);
}
else {
    try {

        $Data=$request->all();

        if (  Employee::create($Data)) {
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>' New Employee Added',
                'description'=> $request->name.'  user employee added by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            return response()->json([
                'success'=>true,
                'message'=>'New employee Successfully created',
                'employees'=>$Data
            ],200);
        }
        else {
            return response()->json([
                'success'=>false,
                'message'=>"New employee Successfully not created"
            ]);
        }

        } catch (Exception $th) {
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
        $user =Employee::findOrFail($id);
        if ($user) {
            return response()->json([
                'success' => true,
                'users'    => $user
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Employee not found ..',
        ]);
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
       // return view('EmployeeUser.CreateUser',$this->data);
       return $this->data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request,$id)
    {

   try {
      $data=$request->all();

          $user=Employee::findOrFail($id);
          $user->category_id=$request->category_id;
          $user->name=$request->name;
          $user->username=$request->username;
          $user->phone=$request->phone;
          $user->email=$request->email;
          $user->address=$request->address;
          $user->account=$request->account;
          $user->salary=$request->salary;
          $user->password=$request->password;

         //  $user->save();
           $user->update();
           $transaction=[
            'user_id'=>Auth::user()->id,
            'user'=>Auth::user()->name,
            'activity'=>' Employee Updated',
            'description'=> $request->name.'  user employee information updated by '.Auth::user()->name


        ];
        Transaction::create($transaction);
            return response()->json([
                'success' => true,
                'message' => 'Yay! User has been successfully updated!',
                'user'    => $user
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Oops! Unable to update user.',
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
        try {
            Employee::find($id)->delete();
            $transaction=[
                'user_id'=>Auth::user()->id,
                'user'=>Auth::user()->name,
                'activity'=>'  Employee Deleted',
                'description'=> '# '.$id.' Number employee deleted by '.Auth::user()->name


            ];
            Transaction::create($transaction);
            return response()->json([
                'success' => true,
                'message' => 'Yay! Employee has been successfully removed!',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Oops! Unable to delete this Employee.',
            ]);
        }
    }

}