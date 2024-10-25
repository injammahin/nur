<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'resume',
        'cover_letter',
        'job_id',  // Add this line
    ];

    // Define relationship to Job model
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
