<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Type of media: 'banner', 'category', 'gallery', 'video', 'link'
            $table->unsignedBigInteger('category_id')->nullable(); // Foreign key for categories
            $table->string('name')->nullable(); // Used for category name or title
            $table->string('image')->nullable(); // Used for banner, gallery images, video poster
            $table->string('media_url')->nullable(); // Used for media URL (video or link)
            $table->text('description')->nullable(); // Description for gallery images
            $table->timestamps();

            // Foreign key constraint (if a category is associated)
            $table->foreign('category_id')->references('id')->on('media')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
