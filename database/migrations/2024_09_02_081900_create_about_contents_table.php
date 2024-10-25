<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutContentsTable extends Migration
{
    public function up()
    {
        Schema::create('about_contents', function (Blueprint $table) {
            $table->id();
            $table->text('about_text')->nullable(); 
            $table->text('vision_text')->nullable(); 
            $table->text('mission_text')->nullable(); 
            $table->string('about_image')->nullable();
            $table->string('vision_image')->nullable();
            $table->string('mission_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_contents');
    }
}
