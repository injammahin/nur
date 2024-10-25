<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    use HasFactory;

    protected $fillable = ['about_text', 'vision_text', 'mission_text', 'about_image', 'vision_image', 'mission_image'];
}
