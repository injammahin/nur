<?php
// app/Models/NewProductFaq.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProductFaq extends Model
{
    use HasFactory;

    protected $fillable = ['new_product_id', 'question', 'answer'];

    // Define relationship with NewProduct
    public function newProduct()
    {
        return $this->belongsTo(NewProduct::class);
    }
}
