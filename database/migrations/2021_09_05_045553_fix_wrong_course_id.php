<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class FixWrongCourseId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $users = DB::table('course_user')
        ->where('course_id', '=', 1)
        ->get();

      foreach ($users as $user) {
        DB::table('course_user')
          ->where('user_id', $user->user_id)
          ->update([
            'id' => '4_'.$user->user_id,
            'course_id' => 4
          ]);
      }

      for ($i=189; $i <=195 ; $i++) { 
        DB::table('course_user')
          ->insert([
            'id' => '4_'.$i,
            'course_id' => 4,
            'user_id' => $i
          ]);
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
