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
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,1,2021)),
        'topic' => "Ta'aruf",
        // 'sub_topic' => "",
        'lecturer' => 'Manajemen'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,4,2021)),
        'topic' => "Orientasi",
        // 'sub_topic' => "",
        'lecturer' => 'Manajemen'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,6,2021)),
        'topic' => "Peran Perempuan Sebagai Hamba",
        'sub_topic' => "Nafasku, Dzikirku",
        'lecturer' => 'Ustadzah Meri'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,11,2021)),
        'topic' => "Peran Perempuan Sebagai Hamba",
        'sub_topic' => "Sesi Curhat",
        'lecturer' => 'Ustadzah Meri'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,12,2021)),
        'topic' => "Peran Perempuan Sebagai Personal",
        'sub_topic' => "Anugerah Menuju Jannah",
        'lecturer' => 'Teteh Khadijah'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,15,2021)),
        'topic' => "Fiqih Perempuan",
        'sub_topic' => "Jejak Langkah Menuju Ridho-Nya",
        'lecturer' => 'Ummi Makki'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,19,2021)),
        'topic' => "Peran Perempuan Sebagai Personal",
        'sub_topic' => "Sesi Curhat",
        'lecturer' => 'Teteh Khadijah'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,20,2021)),
        'topic' => "Peran Perempuan Sebagai Anak",
        'sub_topic' => "Pintu Surga Yang Tengah",
        'lecturer' => 'Bunda Khonsa'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,25,2021)),
        'topic' => "Peran Perempuan Sebagai Anak",
        'sub_topic' => "Sesi Curhat",
        'lecturer' => 'Bunda Khonsa'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,27,2021)),
        'topic' => "Peran Perempuan Sebagai Istri",
        'sub_topic' => "Dua Hati Satu Rasa",
        'lecturer' => 'Bunda Khonsa'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(16,00,0,9,30,2021)),
        'topic' => "Kelas Tematik",
        'sub_topic' => "Gen Ibu Untuk Masa Depan",
        'lecturer' => 'Ummu Sajjad'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,2,2021)),
        'topic' => "Peran Perempuan Sebagai Anak",
        'sub_topic' => "Sesi Curhat",
        'lecturer' => 'Bunda Khonsa'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,4,2021)),
        'topic' => "Peran Perempuan Sebagai Ibu",
        'sub_topic' => "Perempuan Dengan Surga di Telapak Kakinya",
        'lecturer' => 'Bunda Ekha'
      ]);      
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,6,2021)),
        'topic' => "Kelas Inspirasi",
        'sub_topic' => "Kebahagiaan Berjuang Di Jalan Yang Dirindukan Syurga",
        'lecturer' => 'Teh Indadari'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,9,2021)),
        'topic' => "Peran Perempuan Sebagai Ibu",
        'sub_topic' => "Sesi Curhat",
        'lecturer' => 'Bunda Ekha'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,11,2021)),
        'topic' => "Peran Perempuan Sebagai Support System Lingkungan",
        'sub_topic' => "Tanda Cinta Untuk-Nya",
        'lecturer' => 'Ustadzah Meri'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,16,2021)),
        'topic' => "Peran Perempuan Sebagai Support System Lingkungan",
        'sub_topic' => "Sesi Curhat",
        'lecturer' => 'Ustadzah Meri'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,18,2021)),
        'topic' => "Peran Perempuan Sebagai Pekerja",
        'sub_topic' => "Selaksa Karya Bagi Kebaikan Semesta",
        'lecturer' => 'Bunda Ekha'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,20,2021)),
        'topic' => "Peran Perempuan Sebagai Pekerja",
        'sub_topic' => "Sesi Curhat",
        'lecturer' => 'Bunda Ekha'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,22,2021)),
        'topic' => "Test",
        'sub_topic' => "Final Test Sesi 1",
        'lecturer' => 'Manajemen'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,23,2021)),
        'topic' => "Test",
        'sub_topic' => "Final Test Sesi 2",
        'lecturer' => 'Manajemen'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(19,45,0,10,27,2021)),
        'topic' => "Curhat 7 Peran",
        'lecturer' => 'Manajemen'
      ]);
      Schedule::create([
        'course_id' => '4',
        'time' => date("Y/m/d H:i:s",mktime(9,0,0,10,30,2021)),
        'topic' => "Closing dan Graduation",
        'lecturer' => 'Manajemen'
      ]);


      // Schedule::create([
      //   'course_id' => '1',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,1,2021)),
      //   'topic' => 'Perempuan Sebagai Anak',
      //   'sub_topic' => 'Syurga Atau Neraka Bagiku',
      //   'lecturer' => 'Bunda Khonsa'
      // ]);
      // Schedule::create([
      //   'course_id' => '1',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,1,2021)),
      //   'topic' => 'Fiqih Perempuan',
      //   'sub_topic' => 'Yuk Belajar Fiqih',
      //   'lecturer' => 'Ummi Makki'
      // ]);
      // Schedule::create([
      //   'course_id' => '1',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,7,2021)),
      //   'topic' => 'Perempuan Sebagai Anak',
      //   'sub_topic' => 'Sesi Curhat',
      //   'lecturer' => 'Bunda Khonsa'
      // ]);
      // Schedule::create([
      //   'course_id' => '2',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,1,2021)),
      //   'topic' => 'Perempuan Sebagai Anak',
      //   'sub_topic' => 'Syurga Atau Neraka Bagiku',
      //   'lecturer' => 'Bunda Khonsa'
      // ]);
      // Schedule::create([
      //   'course_id' => '3',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,1,2021)),
      //   'topic' => 'Fiqih Perempuan',
      //   'sub_topic' => 'Yuk Belajar Fiqih',
      //   'lecturer' => 'Ummi Makki'
      // ]);
      // Schedule::create([
      //   'course_id' => '4',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,6,2021)),
      //   'topic' => 'Test',
      //   'sub_topic' => 'Pre-Test',
      // ]);
      // Schedule::create([
      //   'course_id' => '4',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,8,7,2021)),
      //   'topic' => 'Perempuan Sebagai Anak',
      //   'sub_topic' => 'Sesi Curhat',
      //   'lecturer' => 'Bunda Khonsa'
      // ]);
      // Schedule::create([
      //   'course_id' => '4',
      //   'time' => date("Y/m/d H:i:s",mktime(19,45,0,9,6,2021)),
      //   'topic' => 'Test',
      //   'sub_topic' => 'Final-Test'
      // ]);
      // DB::table('schedule_links')->insert([
      //   ['schedule_id' => 1, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 1, 'channel' => 'youtube', 'link' => 'https://youtube.com'],
      //   ['schedule_id' => 2, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 3, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 4, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 5, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 6, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 7, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 8, 'channel' => 'zoom', 'link' => 'https://zoom.us'],
      //   ['schedule_id' => 8, 'channel' => 'youtube', 'link' => 'https://youtube.com'],
      // ]);
    }
}
