<?php
// app/Models/NewProduct.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'short_description', 'description', 'thumb_image', 'image', 'logo', 'video_url', 'brochure','navmenu_image'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($newProduct) {
            $newProduct->slug = Str::slug($newProduct->name); // Generate slug from name
        });
    }

    public function faqs()
    {
        return $this->hasMany(NewProductFaq::class);
    }
    public function modules()
    {
        return $this->hasMany(NewProductModule::class);
    }
    
}
