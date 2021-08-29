<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class add_testadmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'The Admin',
        'email' => 'admin@admin.com',
        'phone' => '628161170961',
        'password' => bcrypt('password'),
        'role_id' => 2,
      ]);
      $siswa = User::create([
        'name' => 'Fitri',
        'email' => 'nufia91@gmail.com',
        'phone' => '6285693935273',
        'password' => bcrypt('sekolah7ps4'),
        'role_id' => 1,
        'multiple_courses' => false,
        'default_course' => 4, 
      ]);
      $siswa->courses()->attach(4, ['id' => $siswa->id.'_4']);      
    }
}
