<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable=['user_id','message'];

    protected $with=['user'];
   // protected $with=['employee'];

// public function employee (){
//     return $this->belongsTo(Employee::class ,'user_id','id');
// }
    public function user()
    {
       return $this->belongsTo(Admin::class,'user_id','id');
    }
}
