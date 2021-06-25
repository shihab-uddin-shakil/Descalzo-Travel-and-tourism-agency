<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['category_id','name','username','password','account','salary','phone','email','address'];
    public function category (){
        return $this->belongsTo(Employee_Category::class);
    }
}