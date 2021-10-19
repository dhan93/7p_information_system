<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class shirah1DoubleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::where('phone', '6281122330220')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '62811856385')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '628119770136')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6281218293032')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '628122958414')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6281249671799')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6281266575313')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6281339084676')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6281380907469')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6281382745567')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '628179178134')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6281809024181')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '62818299989')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6282234563221')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6283115233740')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6285210259702')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6285279756765')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6285323035313')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '6285691076160')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '628811536566')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
      $user = User::where('phone', '62895623051994')->first(); $user->multiple_courses=1; $user->save(); $user->courses()->attach(5,  ['id' => '5_'.$user->id]);
    }
}
