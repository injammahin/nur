<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTagTable extends Migration
{
    public function up()
    {
        // Check if the table doesn't exist before creating
        if (!Schema::hasTable('blog_tag')) {
            Schema::create('blog_tag', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('blog_id');
                $table->unsignedBigInteger('tag_id');
                $table->timestamps();

                // Add foreign keys
                $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
                $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('blog_tag');
    }
}
