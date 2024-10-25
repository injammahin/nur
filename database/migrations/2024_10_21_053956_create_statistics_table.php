<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // E.g., 'Tech Partners', 'Countries Served', etc.
            $table->integer('value'); // E.g., 78, 32, etc.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
