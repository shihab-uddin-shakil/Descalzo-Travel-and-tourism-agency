<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable=['category_id','name','username','password','account','salary','phone','email','address'];
    public function category (){
        return $this->belongsTo(Employee_Category::class);
    }
}
=======

    protected $fillable = [
        'email',
        'password',
         
    ];
}
>>>>>>> f55aa5ce7f9acfdf056cfcf635728cc7366e1f58
