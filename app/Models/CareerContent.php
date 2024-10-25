<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerContent extends Model
{
    protected $table = 'career_content';

    protected $fillable = [
        'banner_image', 'career_text', 'career_image_1', 'career_image_2', 'career_image_3', 'career_image_4', 'faqs'
    ];

    // Cast faqs to array
    protected $casts = [
        'faqs' => 'array',
    ];
}
