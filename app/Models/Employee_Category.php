<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Category extends Model
{
    use HasFactory;
    public $fillable=['title'];

    public function employees (){
        return $this->hasMany(Employee::class);
    }
    public static function categoryArray(){
        $arr=[];
        $groups=Employee_Category::all();
        foreach($groups as $group){
            $arr[$group->id]=$group->title;
        }
        return $arr;
    }
}