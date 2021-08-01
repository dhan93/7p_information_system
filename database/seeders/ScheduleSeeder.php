<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schedule::create([
        'course_id' => '1',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,1,2021)),
        'topic' => 'Perempuan Sebagai Anak',
        'sub_topic' => 'Syurga Atau Neraka Bagiku',
        'lecturer' => 'Bunda Konsa'
      ]);
      Schedule::create([
        'course_id' => '1',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,1,2021)),
        'topic' => 'Fiqih Perempuan',
        'sub_topic' => 'Yuk Belajar Fiqih',
        'lecturer' => 'Ummi Makki'
      ]);
      Schedule::create([
        'course_id' => '1',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,7,2021)),
        'topic' => 'Perempuan Sebagai Anak',
        'sub_topic' => 'Sesi Curhat',
        'lecturer' => 'Bunda Khonsa'
      ]);
      Schedule::create([
        'course_id' => '2',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,1,2021)),
        'topic' => 'Perempuan Sebagai Anak',
        'sub_topic' => 'Syurga Atau Neraka Bagiku',
        'lecturer' => 'Bunda Konsa'
      ]);
      Schedule::create([
        'course_id' => '3',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,1,2021)),
        'topic' => 'Fiqih Perempuan',
        'sub_topic' => 'Yuk Belajar Fiqih',
        'lecturer' => 'Ummi Makki'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,7,2021)),
        'topic' => 'Perempuan Sebagai Anak',
        'sub_topic' => 'Sesi Curhat',
        'lecturer' => 'Bunda Khonsa'
      ]);
    }
}
