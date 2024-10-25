<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // Removed 'after()' method
            $table->string('location');
            $table->string('employment_type');
            $table->integer('vacancy')->default(1);
            $table->text('job_description');
            $table->text('responsibilities');
            $table->text('qualifications');
            $table->string('salary');
            $table->date('application_deadline');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
