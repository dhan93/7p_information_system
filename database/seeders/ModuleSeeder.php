<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Module::create([
        'schedule_id' => 1,
        'title' => 'Syurga Atau Neraka Bagiku',
        'attachment' => 'https://filestorer.com/documentname1.pdf',
        'type' => 'document'
      ]);
      Module::create([
        'schedule_id' => 2,
        'title' => 'Yuk Belajar Fiqih',
        'attachment' => 'https://filestorer.com/documentname2.pdf',
        'type' => 'document'
      ]);
      Module::create([
        'schedule_id' => 4,
        'title' => 'Syurga Atau Neraka Bagiku',
        'attachment' => 'https://filestorer.com/documentname1.pdf',
        'type' => 'document'
      ]);
      Module::create([
        'schedule_id' => 5,
        'title' => 'Yuk Belajar Fiqih',
        'attachment' => 'https://filestorer.com/documentname2.pdf',
        'type' => 'document'
      ]);
    }
}
