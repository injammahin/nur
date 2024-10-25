<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'employment_type',
        'vacancy',
        'job_description',
        'responsibilities',
        'qualifications',
        'salary',
        'application_deadline',
        'image',
        'slug',
    ];

    protected $casts = [
        'application_deadline' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($job) {
            $job->slug = Str::slug($job->title); // Generate slug from title
        });
    
        static::updating(function ($job) {
            $job->slug = Str::slug($job->title);
        });
    }

    // Define relationship to Applicant model
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }
}
