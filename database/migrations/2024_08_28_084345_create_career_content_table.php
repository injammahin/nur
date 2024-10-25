<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerContentTable extends Migration
{
    public function up()
    {
        Schema::create('career_content', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->text('career_text')->nullable();
            $table->string('career_image_1')->nullable();
            $table->string('career_image_2')->nullable();
            $table->string('career_image_3')->nullable();
            $table->string('career_image_4')->nullable();
            $table->text('faqs')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('career_content');
    }
}
