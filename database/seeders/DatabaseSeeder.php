<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\add_testadmin;
use Database\Seeders\insert_admin_and_siswa_roles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
          insert_admin_and_siswa_roles::class,
          add_testadmin::class,
      ]);
    }
}
