<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            // id: int
            $table->increments('id');
            // exam_id: int
            $table->unsignedInteger('exam_id');
            // text: string
            $table->string('text', 255);
            // answer: tiny int
            $table->string('answer', 1);
            $table->timestamps();

            $table->foreign('exam_id')->references('id')->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_user');
        Schema::dropIfExists('question_options');
        Schema::dropIfExists('questions');
    }
}
