<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProductModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_product_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('new_product_id');
            $table->unsignedBigInteger('module_id');
            $table->string('name')->nullable(); // Make the name column nullable or provide a default value
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('new_product_id')->references('id')->on('new_products')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *x
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_product_modules');
    }
}
