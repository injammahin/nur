<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('career_banner')->nullable();
            $table->string('service_banner')->nullable();
            $table->string('gallery_banner')->nullable();
            $table->string('product_banner')->nullable();
            $table->string('about_banner')->nullable();
            $table->string('job_banner')->nullable();
            $table->string('apply_banner')->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
