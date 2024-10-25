<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visitors', function (Blueprint $table) {
            $table->string('country')->nullable(); // Add the country column
        });
    }
    
    public function down()
    {
        Schema::table('visitors', function (Blueprint $table) {
            $table->dropColumn('country'); // Remove the country column if rolled back
        });
    }
    
};
