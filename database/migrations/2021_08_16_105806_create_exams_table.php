<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            // id: int
            $table->increments('id');
            // class_id: int
            $table->unsignedInteger('schedule_id');
            // questions: int
            $table->unsignedTinyInteger('total_questions');
            // effective_date: date
            $table->date('due_date');
            // category: string
            $table->enum('category', ['pre', 'post', 'mid', 'final']);
            $table->timestamps();

            $table->foreign('schedule_id')->references('id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_user');
        Schema::dropIfExists('exams');
    }
}
