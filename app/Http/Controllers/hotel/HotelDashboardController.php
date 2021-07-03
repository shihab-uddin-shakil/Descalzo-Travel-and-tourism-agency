<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelDashboardController extends Controller
{
    public function index()
    {
        return view('admin.main.dashboard');
    }
}
