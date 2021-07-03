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
        $categorys=Employee_Category::all();
        foreach($categorys as $category){
            $arr[$category->id]=$category->title;
        }
        return $arr;
    }
}