<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporalController extends Controller
{
    public function calender()
    {
       return view('Calender.index');
    }
    public function EUserList()
    {
       return view('EmployeeUser.UserList');
    }
    public function EUseeCreate()
    {
       return view('EmployeeUser.CreateUser');
    }
    public function EGrpList()
    {
       return view('EmployeeGroup.group');
    }
    public function EGrpCreate()
    {
       return view('EmployeeGroup.create');
    }
    public function tourist()
    {
       return view('Tourist.tourist');
    }
    public function touristTransaction()
    {
       return view('Tourist.transaction');
    }
    public function hotelTransaction()
    {
       return view('Hotel.transaction');
    }
    public function employeeTransaction()
    {
       return view('employee.transaction');
    }
    public function vehicleTransaction()
    {
       return view('Vehicle.transaction');
    }
    public function PaymentHistory()
    {
       return view('Payment.history');
    }
    public function NewPayment()
    {
       return view('Payment.salary');
    }
}