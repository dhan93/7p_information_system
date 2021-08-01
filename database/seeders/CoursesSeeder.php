<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
          'id' => 1,
          'name' => 'Sekolah 7 Perempuan',
          'short_name' => 'S7P',
          'generation' => 1
        ]);
        Course::create([
          'id' => 2,
          'name' => 'Sekolah 7 Perempuan',
          'short_name' => 'S7P',
          'generation' => 2
        ]);
        Course::create([
          'id' => 3,
          'name' => 'Sekolah 7 Perempuan',
          'short_name' => 'S7P',
          'generation' => 3
        ]);
        Course::create([
          'id' => 4,
          'name' => 'Sekolah 7 Perempuan',
          'short_name' => 'S7P',
          'generation' => 4
        ]);
    }
}
