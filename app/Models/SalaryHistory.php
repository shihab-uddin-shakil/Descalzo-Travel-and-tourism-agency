<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryHistory extends Model
{
    use HasFactory;
    protected $fillable=['employee_id','amount','description'];

    protected $with=['employee'];

public function employee (){
    return $this->belongsTo(Employee::class ,'employee_id','id');
}
}