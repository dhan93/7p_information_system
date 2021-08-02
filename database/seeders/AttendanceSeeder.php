<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Attendance::create([
        'user_id' => 2,
        'schedule_id' => 1,
        'status' => 'hadir',
        'channel' => 'zoom',
        'time_in' => date('H:i:s', strtotime('19:45')),
        'until_finish' => true,
      ]);
      Attendance::create([
        'user_id' => 2,
        'schedule_id' => 2,
        'status' => 'izin',
        'channel' => 'youtube record',
        'note' => 'sedang membersamai anak mempersiapkan ujian akhir sekolah',
      ]);
      Attendance::create([
        'user_id' => 2,
        'schedule_id' => 3,
        'status' => 'alpa',
      ]);
      Attendance::create([
        'user_id' => 2,
        'schedule_id' => 1,
        'status' => 'hadir',
        'channel' => 'youtube live',
        'time_in' => date('H:i:s', strtotime('20:45')),
        'until_finish' => false,
      ]);
    }
}
