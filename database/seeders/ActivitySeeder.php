<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\ActivityGroup;
use App\Models\UserActivity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityGroup::create([
          'id' => 1,
          'course_id' => '4',
          'title' => 'Shalat Fardhu',
          'type' => 'checkbox'
        ]);
        ActivityGroup::create([
          'id' => 2,
          'course_id' => '4',
          'title' => 'Shalat Sunnah',
          'type' => 'checkbox'
        ]);
        ActivityGroup::create([
          'id' => 3,
          'course_id' => '4',
          'title' => "Tilawah Al-Qur'an",
          'type' => 'checkbox'
        ]);
        ActivityGroup::create([
          'id' => 4,
          'course_id' => '4',
          'title' => 'Dzikir & Sholawat',
          'type' => 'checkbox'
        ]);
        ActivityGroup::create([
          'id' => 5,
          'course_id' => '4',
          'title' => 'Amal Aqliyah',
          'type' => 'checkbox'
        ]);
        ActivityGroup::create([
          'id' => 6,
          'course_id' => '4',
          'title' => 'Amal Jasadiyah',
          'type' => 'checkbox'
        ]);
        ActivityGroup::create([
          'id' => 7,
          'course_id' => '4',
          'title' => 'Amal Sosial',
          'type' => 'checkbox'
        ]);

        // sholat fardhu
        Activity::create([
          'activity_group_id' => 1,
          'title' => 'Shalat Fardhu Subuh'
        ]);
        Activity::create([
          'activity_group_id' => 1,
          'title' => 'Shalat Fardhu Dzuhur'
        ]);
        Activity::create([
          'activity_group_id' => 1,
          'title' => 'Shalat Fardhu Ashar'
        ]);
        Activity::create([
          'activity_group_id' => 1,
          'title' => 'Shalat Fardhu Maghrib'
        ]);
        Activity::create([
          'activity_group_id' => 1,
          'title' => 'Shalat Fardhu Isya'
        ]);

        // Shalat sunnah
        Activity::create([
          'activity_group_id' => 2,
          'title' => 'Shalat Qabliyah Subuh'
        ]);
        Activity::create([
          'activity_group_id' => 2,
          'title' => 'Shalat Dhuha'
        ]);
        Activity::create([
          'activity_group_id' => 2,
          'title' => 'Shalat Qabliyah Dzuhur'
        ]);
        Activity::create([
          'activity_group_id' => 2,
          'title' => "Shalat Ba'diyah Dzuhur"
        ]);
        Activity::create([
          'activity_group_id' => 2,
          'title' => "Shalat Ba'diyah Maghrib"
        ]);
        Activity::create([
          'activity_group_id' => 2,
          'title' => "Shalat Ba'diyah Isya"
        ]);
        Activity::create([
          'activity_group_id' => 2,
          'title' => "Shalat Tahajud"
        ]);
        Activity::create([
          'activity_group_id' => 2,
          'title' => "Shalat Witir"
        ]);

        // Tilawah
        Activity::create([
          'activity_group_id' => 3,
          'title' => "Membaca Al-qur'an minimal 1/2 Juz"
        ]);
        Activity::create([
          'activity_group_id' => 3,
          'title' => 'Membaca Surat Al-Mulk sebelum tidur'
        ]);
        Activity::create([
          'activity_group_id' => 3,
          'title' => "Membaca Surat Al Kahfi (Setiap Jum'at)"
        ]);

        // dzikir&sholawat
        Activity::create([
          'activity_group_id' => 4,
          'title' => 'Bershalawat Kepada Nabi'
        ]);
        Activity::create([
          'activity_group_id' => 4,
          'title' => 'Dzikir Al-Matsurat Pagi'
        ]);
        Activity::create([
          'activity_group_id' => 4,
          'title' => 'Dzikir Al-Matsurat Sore'
        ]);
        Activity::create([
          'activity_group_id' => 4,
          'title' => 'Memperbanyak istighfar'
        ]);

        // Aqliyah
        Activity::create([
          'activity_group_id' => 5,
          'title' => 'Membaca Buku Bermanfaat (minimal 1 pekan sekali)'
        ]);
        Activity::create([
          'activity_group_id' => 5,
          'title' => "Menghadiri Majelis Ta'lim Atau Majelis Ilmu (minimal 1 pekan sekali)"
        ]);

        // jasadiyah
        Activity::create([
          'activity_group_id' => 6,
          'title' => 'Berolah raga'
        ]);
        Activity::create([
          'activity_group_id' => 6,
          'title' => 'Selalu Menjaga Wudhu'
        ]);
        Activity::create([
          'activity_group_id' => 6,
          'title' => 'Puasa Senin & Kamis'
        ]);

        // sosial
        Activity::create([
          'activity_group_id' => 7,
          'title' => 'Sedekah Pagi'
        ]);
        Activity::create([
          'activity_group_id' => 7,
          'title' => 'Telpon atau Silaturahim Dengan Orang Tua atau Keluarga  (minimal 1 pekan sekali)'
        ]);

        // ActivityGroup::create([
        //   'id' => 1,
        //   'course_id' => '4',
        //   'title' => 'Qiyamul Lail',
        //   'type' => 'checkbox'
        // ]);
        // ActivityGroup::create([
        //   'id' => 2,
        //   'course_id' => '4',
        //   'title' => 'Puasa Sunah',
        //   'type' => 'radio'
        // ]);
        // Activity::create([
        //   'id' => 1,
        //   'activity_group_id' => 1,
        //   'title' => 'Shalat Tahajud'
        // ]);
        // Activity::create([
        //   'id' => 2,
        //   'activity_group_id' => 1,
        //   'title' => 'Shalat Taubat'
        // ]);
        // Activity::create([
        //   'id' => 3,
        //   'activity_group_id' => 1,
        //   'title' => 'Shalat Witir'
        // ]);
        // Activity::create([
        //   'id' => 4,
        //   'activity_group_id' => 1,
        //   'title' => 'Baca Al-Quran'
        // ]);
        // Activity::create([
        //   'id' => 5,
        //   'activity_group_id' => 2,
        //   'title' => 'Puasa Senin Kamis'
        // ]);
        // Activity::create([
        //   'id' => 6,
        //   'activity_group_id' => 2,
        //   'title' => 'Puasa Ayamul Bidh'
        // ]);
        // Activity::create([
        //   'id' => 7,
        //   'activity_group_id' => 2,
        //   'title' => 'Puasa Daud'
        // ]);
        // UserActivity::create([
        //   'id' => '2_4_2021-08-01',
        //   'user_id' => 2,
        //   'date' => date("Y-m-d",mktime(0,0,0,8,1,2021)),
        //   'activities' => json_encode([
        //     [
        //       'activity_group' => 1,
        //       'activities' => [1, 2, 3],
        //     ],
        //     [
        //       'activity_group' => 2,
        //       'activities' => [5]
        //     ]
        //     ]),
        //     'activities_done' => 4,
        //     'total_activities' => 5,
        //     'note' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error quibusdam odit possimus fugit, tenetur consequatur temporibus delectus quod saepe est ea molestias numquam.',
        //     'course_id' => 4
        // ]);
        // UserActivity::create([
        //   'id' => '2_4_2021-08-02',
        //   'user_id' => 2,
        //   'date' => date("Y-m-d",mktime(0,0,0,8,2,2021)),
        //   'activities' => json_encode([
        //     [
        //       'activity_group' => 1,
        //       'activities' => [1, 3, 4],
        //     ]
        //     ]),
        //     'activities_done' => 3,
        //     'total_activities' => 5,
        //     'course_id' => 4
        // ]);
    }
}
