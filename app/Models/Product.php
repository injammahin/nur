<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Str;

// class Product extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'name',
//         'slug',
//         'description',
//         'thumb_image',
//         'short_description',
//         'image',
//         'logo',
//         'hr_payroll_description',
//         'hr_payroll_image',
//         'accounting_description',
//         'accounting_image',
//         'inventory_management_description',
//         'inventory_management_image',
//         'fams_description',
//         'fams_image',
//         'faqs',
//         'video_url',
//     ];

//     public function getRouteKeyName()
//     {
//         return 'slug';
//     }
//     public function faqs()
//     {
//         return $this->hasMany(Faq::class);
//     }

//     protected static function boot()
//     {
//         parent::boot();

//         static::saving(function ($product) {
//             $product->slug = Str::slug($product->name); 
//         });
//     }
// }
