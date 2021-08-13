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
          'title' => 'Qiyamul Lail',
          'type' => 'checkbox'
        ]);
        ActivityGroup::create([
          'id' => 2,
          'course_id' => '4',
          'title' => 'Puasa Sunah',
          'type' => 'radio'
        ]);
        Activity::create([
          'id' => 1,
          'activity_group_id' => 1,
          'title' => 'Shalat Tahajud'
        ]);
        Activity::create([
          'id' => 2,
          'activity_group_id' => 1,
          'title' => 'Shalat Taubat'
        ]);
        Activity::create([
          'id' => 3,
          'activity_group_id' => 1,
          'title' => 'Shalat Witir'
        ]);
        Activity::create([
          'id' => 4,
          'activity_group_id' => 1,
          'title' => 'Baca Al-Quran'
        ]);
        Activity::create([
          'id' => 5,
          'activity_group_id' => 2,
          'title' => 'Puasa Senin Kamis'
        ]);
        Activity::create([
          'id' => 6,
          'activity_group_id' => 2,
          'title' => 'Puasa Ayamul Bidh'
        ]);
        Activity::create([
          'id' => 7,
          'activity_group_id' => 2,
          'title' => 'Puasa Daud'
        ]);
        UserActivity::create([
          'user_id' => 2,
          'date' => date("Y-m-d",mktime(0,0,0,8,1,2021)),
          'activities' => json_encode([
            [
              'activity_group' => 1,
              'activities' => [1, 2, 3],
            ],
            [
              'activity_group' => 2,
              'activities' => [5]
            ]
            ]),
            'note' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error quibusdam odit possimus fugit, tenetur consequatur temporibus delectus quod saepe est ea molestias numquam.',
            'course_id' => 4
        ]);
        UserActivity::create([
          'user_id' => 2,
          'date' => date("Y-m-d",mktime(0,0,0,8,2,2021)),
          'activities' => json_encode([
            [
              'activity_group' => 1,
              'activities' => [1, 3, 4],
            ]
            ]),
            'course_id' => 4
        ]);
    }
}
