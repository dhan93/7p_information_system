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
        'password' => bcrypt('password'),
        'role_id' => 2,
      ]);
      User::create([
        'name' => 'The Student',
        'email' => 'student@student.com',
        'password' => bcrypt('password'),
        'role_id' => 1,
      ]);
    }
}
