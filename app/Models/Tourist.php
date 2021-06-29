<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
         'image',
    ];
    use HasFactory;
}
