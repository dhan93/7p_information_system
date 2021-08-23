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
        'name' => 'The Student',
        'email' => 'student@student.com',
        'phone' => '6282210561661',
        'password' => bcrypt('password'),
        'role_id' => 1,
        'multiple_courses' => true,
        'default_course' => 4, 
      ]);
      $siswa->courses()->attach([1,4]);
    }
}
