<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    use HasFactory;
    protected $fillable=['name','username','password','account','phone','nid','rooms','price','email','address','status'];
}
