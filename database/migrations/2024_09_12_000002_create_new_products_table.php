<?php
// database/migrations/2024_09_12_000002_create_new_products_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProductsTable extends Migration
{
    public function up()
    {
        Schema::create('new_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('thumb_image')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->string('video_url')->nullable();
            $table->string('brochure')->nullable(); // Added field for brochure PDF
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('new_products');
    }
}
