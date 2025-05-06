<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'booking';

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'number',
        'date',
        'time',
        'address',
        'service_type',
        'car_type',
    ];
}
