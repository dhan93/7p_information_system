<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Seeder;
use Database\Seeders\CoursesSeeder;
use Database\Seeders\add_testadmin;
use Database\Seeders\insert_admin_and_siswa_roles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
          // CoursesSeeder::class,
          // ScheduleSeeder::class,
          // insert_admin_and_siswa_roles::class,
          // add_testadmin::class,   
          // // AttendanceSeeder::class,
          // // ModuleSeeder::class,
          // ActivitySeeder::class,
          // ExamSeeder::class,
          // Season4StudentData::class
      ]);
    }
}
