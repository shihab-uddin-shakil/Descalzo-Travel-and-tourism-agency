<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function Transaction()
    {
        $this->data['transactions']=Transaction::all();
       return view('employee.transaction',$this->data);
    }
}
