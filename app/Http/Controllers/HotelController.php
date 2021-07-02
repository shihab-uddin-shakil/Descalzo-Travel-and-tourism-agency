<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Hotel_Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class HotelController extends Controller
{
    public function index()
    {
       // $this->data['mode']='edit';
        $this->data['hotels']=Hotel_Owner::all();
        return view('hotel.hotel',$this->data);
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
        Hotel_Owner:: where('id',$id)->update(['status'=>1]);
        return redirect()->to('hotel');
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
        Hotel_Owner:: where('id',$id)->update(['status'=>0]);
        return redirect()->to('hotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->data['user']= Hotel_Owner::findOrFail($id);
        if ( Hotel_Owner::find($id)->delete()) {
            Session::flash('message',"Hotel Deleted Successfully..");
         }
         else {
             Session::flash('message',"Hotel not  Delete .");
         }
         return redirect()->to('hotel');
    }
}
