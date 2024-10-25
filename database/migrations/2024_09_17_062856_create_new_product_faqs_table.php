<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProductFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_product_faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('new_product_id')->constrained('new_products')->onDelete('cascade'); // Foreign key to new_products table
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_product_faqs');
    }
}
