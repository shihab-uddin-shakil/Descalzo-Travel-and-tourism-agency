<?php

namespace App\Http\Controllers;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function guide(){
        return view('guide.guide');
    }
    public function submit(Request $req){
        $data= $req->all();
        Guide::create($data);
        return redirect ('/guide');
    }

}
