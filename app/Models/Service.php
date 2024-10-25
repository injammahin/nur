<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',  // Include slug in fillable fields
        'short_description',
        'long_description',
        'service_image',
        'service_banner',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->name);  // Generate slug from service name
            }
        });
    }
}
