<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'destination',
        'tour_id',
        'tourist_id',
    ];
    use HasFactory;
}
