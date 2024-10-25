<?php
// app/Models/Module.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];

    public function newProducts()
    {
        return $this->belongsToMany(NewProduct::class, 'new_product_module')->withPivot('image', 'description')->withTimestamps();
    }
}
