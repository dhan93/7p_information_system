<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class insert_admin_and_siswa_roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create([
          'id' => 0,
          'name' => 'User',
        ],
      );
      Role::create([
          'id' => 1,
          'name' => 'Siswa',
        ],
      );
      Role::create([
          'id' => 2,
          'name' => 'Administrator',
        ],
      );
    }
}
