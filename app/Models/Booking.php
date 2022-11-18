<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    
    protected $fillable = ['title',  'start_time', 'end_time', 'description' ];

    protected $hidden = [];
}
