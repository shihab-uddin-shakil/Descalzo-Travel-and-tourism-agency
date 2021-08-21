<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['category_id','name','username','password','account','salary','phone','email','address'];
    protected $with=['category'];
    public function category (){
        return $this->belongsTo(Employee_Category::class ,'category_id','id');
    }
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];


    // public function getJWTIdentifier()
    // {
    //     return $this->getKey();
    // }

    // /**
    //  * Return a key value array, containing any custom claims to be added to the JWT.
    //  *
    //  * @return array
    //  */
    // public function getJWTCustomClaims()
    // {
    //     return [];
    // }
}
