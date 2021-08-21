<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    public $fillable=['user_id','message'];

    protected $with=['user'];

public function user (){
    return $this->belongsTo(Tourist::class ,'user_id','id');
}
}