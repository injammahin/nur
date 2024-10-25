<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'career_banner',
        'service_banner',
        'gallery_banner',
        'product_banner',
        'about_banner',
        'job_banner',
        'apply_banner',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'career_banner' => 'string',
        'service_banner' => 'string',
        'gallery_banner' => 'string',
        'product_banner' => 'string',
        'about_banner' => 'string',
        'job_banner' => 'string',
        'apply_banner' => 'string',
    ];
}
