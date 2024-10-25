<?php
// database/migrations/2024_09_12_000003_create_new_product_module_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProductModuleTable extends Migration
{
    public function up()
    {
        Schema::create('new_product_module', function (Blueprint $table) {
            $table->id();
            $table->foreignId('new_product_id')->constrained('new_products')->onDelete('cascade');
            $table->foreignId('module_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('new_product_module');
    }
}
