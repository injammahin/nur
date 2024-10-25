<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->string('image');  // Store image path
            $table->string('video_thumbnail')->nullable();
            $table->string('video_url')->nullable();
            $table->text('video_text')->nullable();
            $table->boolean('is_video')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
