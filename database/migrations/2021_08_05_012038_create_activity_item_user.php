<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityItemUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_item_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('activity_item_id');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();

            $table->foreign('activity_item_id')->references('id')->on('activity_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_item_user');
    }
}
