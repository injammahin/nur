<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    // Add the 'ip_address' field to the fillable property
    protected $fillable = [
        'ip_address',
        'visited_at', // Include any other fields you want to allow mass assignment
    ];

    // If you use timestamps, make sure to define this field if it's not the default
    public $timestamps = false; 
}
