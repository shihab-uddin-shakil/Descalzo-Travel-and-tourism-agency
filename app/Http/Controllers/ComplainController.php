<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComplainController extends Controller
{
   public function complain()
   {
      $this->data['complains']=DB::table('complains')->where('recever_id',
      Auth::user()->id)->get();
      return view('Tourist.complain',$this->data);
   }
}