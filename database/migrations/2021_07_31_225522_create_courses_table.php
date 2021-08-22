<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('short_name', 50);
            $table->tinyInteger('generation')->unsigned;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_user');
        Schema::dropIfExists('modules');
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('schedule_links');
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('user_activities');
        Schema::dropIfExists('activities');
        Schema::dropIfExists('activity_groups');
        Schema::dropIfExists('courses');
    }
}
