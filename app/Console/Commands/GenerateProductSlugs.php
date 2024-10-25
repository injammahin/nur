<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Str;

class GenerateProductSlugs extends Command
{
    protected $signature = 'products:generate-slugs';
    protected $description = 'Generate slugs for all products without a slug';

    public function handle()
    {
        $products = Product::whereNull('slug')->get();
        foreach ($products as $product) {
            $product->slug = Str::slug($product->name);
            $product->save();
        }

        $this->info('Product slugs generated successfully.');
    }
}