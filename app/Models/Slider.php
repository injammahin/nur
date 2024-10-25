<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    // Add 'video_url', 'video_thumbnail', and 'video_text' to the fillable array.
    protected $fillable = [
        'title',
        'caption',
        'image',
        'video_url',
        'video_thumbnail',
        'video_text',
        'is_video'
    ];
}
