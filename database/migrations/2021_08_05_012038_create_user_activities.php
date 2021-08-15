<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_activities', function (Blueprint $table) {
            $table->id();
            $table->json('activities');
            $table->foreignId('user_id')->constrained();
            $table->unsignedInteger('course_id');
            $table->date('date');
            $table->unsignedTinyInteger('activities_done');
            $table->unsignedTinyInteger('total_activities');
            $table->string('note', 255)->nullable();
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_activities');
    }
}
