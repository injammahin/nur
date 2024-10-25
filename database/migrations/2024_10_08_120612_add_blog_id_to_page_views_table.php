<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBlogIdToPageViewsTable extends Migration
{
    public function up()
    {
        Schema::table('page_views', function (Blueprint $table) {
            $table->unsignedBigInteger('blog_id')->nullable()->after('id'); // Add a blog_id column
            
            // Optional: You can add a foreign key constraint if you want
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('page_views', function (Blueprint $table) {
            $table->dropForeign(['blog_id']); // Drop foreign key if it exists
            $table->dropColumn('blog_id');    // Drop the column
        });
    }
}
