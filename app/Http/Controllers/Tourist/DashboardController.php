<?php

namespace App\Http\Controllers\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TouristLoginRequest;
use App\Models\Tourist;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $reg)
    {
        $email = $reg->session()->get('email');
        $data = Tourist::where('email',$email)->first();
        $hotels = Hotel::all();
        return view ('Tourist.home',compact('data','hotels'));
        
    }
    public function profile(Request $reg)
    {

// $user = Tourist::findOrFail($id);

        // $user->name = $request->get('name');

        // $user->email = $request->get('email');

        // $user->save();

 //return view('Tourist.dashboard-myprofile', [$user->id])->with('message', 'User has been updated!');
        $email = $reg->session()->get('email');
        //$data = DB::table('tourists')->where('email',$email)->first();
        $data = Tourist::where('email',$email)->first();
       //$tourist  = Tourist::find($email);
        return view ('Tourist.dashboard-myprofile',compact('data'));
        //->with('tourists',$data); //->with('tourist',$tourist);
        
    }
    public function update(Request $reg)
    {
        $email = $reg->session()->get('email');

        Tourist::where('email',$email)
                ->update([
                        'username' => $reg->username,
                        'phone' => $reg->phone,
                        'email' => $reg->email,
                        //'image' => $reg->$newImageName,
                        'address' => $reg->address
                        ]);
        // $user->username = $reg->input('username');
        // $user->phone = $reg->input('phone');
        // $user->email = $reg->input('email');
        // $user->address = $reg->input('address');
        // $user->save();
        
         $data = Tourist::where('email',$email)->first();
                
        //return view()->Route('collectorProfile')->with('user', $user);
        return view('Tourist.dashboard-myprofile',compact('data'));
        //->with('user', $user);
    }

    public function dashboardMessages()
    {
        return view ('Tourist.dashboard-messages');
    }
    public function dashboardBookings(Request $reg)
    {
        $email = $reg->session()->get('email');
        $data = Tourist::where('email',$email)->first();
        $book = Booking::all();
        return view ('Tourist.dashboard-bookings',compact('data','book'));
    }
    public function delete(Request $reg, $id)
    {
        $data = Booking::find($id)->delete();
        return redirect ('/dashboard-bookings');
    }
    public function dashboardReview()
    {
        return view ('Tourist.dashboard-review');
    }
    // public function view()
    // {
    //     $hotels = Hotel::all();
    //     return view ('Tourist.home',compact('hotels'));
    // }
}
