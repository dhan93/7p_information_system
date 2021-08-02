<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('schedule_id');
            $table->foreignId('user_id')->constrained();
            $table->enum('status', ['hadir', 'izin', 'alpa']);
            $table->string('channel', 20)->nullable();
            $table->time('time_in')->nullable();
            $table->boolean('until_finish')->nullable();
            $table->string('note', 100)->nullable();
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
        Schema::dropIfExists('attendances');
    }
}
