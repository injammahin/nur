<?php

// database/migrations/xxxx_xx_xx_create_main_settings_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('main_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // Unique key for each setting
            $table->text('value')->nullable(); // Value for each setting
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('main_settings');
    }
}
