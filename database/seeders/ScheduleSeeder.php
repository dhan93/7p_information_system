<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;

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
        'lecturer' => 'Bunda Khonsa'
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
        'lecturer' => 'Bunda Khonsa'
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
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,6,2021)),
        'topic' => 'Test',
        'sub_topic' => 'Pre-Test',
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,7,2021)),
        'topic' => 'Perempuan Sebagai Anak',
        'sub_topic' => 'Sesi Curhat',
        'lecturer' => 'Bunda Khonsa'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,6,2021)),
        'topic' => 'Test',
        'sub_topic' => 'Final-Test'
      ]);
      DB::table('schedule_links')->insert([
        ['schedule_id' => 1, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 1, 'channel' => 'youtube', 'link' => 'https://youtube.com'],
        ['schedule_id' => 2, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 3, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 4, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 5, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 6, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 7, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 8, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
        ['schedule_id' => 8, 'channel' => 'youtube', 'link' => 'https://youtube.com'],
      ]);
    }
}
