<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['type', 'category_id', 'name', 'image', 'media_url', 'description'];

    // Relationships
    public function category()
    {
        return $this->belongsTo(self::class, 'category_id');
    }
}
