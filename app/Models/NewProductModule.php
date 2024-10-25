<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProductModule extends Model
{
    use HasFactory;

    protected $fillable = ['new_product_id', 'module_id', 'description', 'image'];

    public function newProduct()
    {
        return $this->belongsTo(NewProduct::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
