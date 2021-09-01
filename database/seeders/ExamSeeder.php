<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Exam;
use App\Models\Question;
use App\Models\QuestionOption;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::create([
          'schedule_id'=>20,
          'course_id'=>4,
          'total_questions'=>5,
          'due_date'=>date("Y-m-d",mktime(22,0,0,10,22,2021)),
          'category'=>'final',
        ]);
        Exam::create([
          'schedule_id'=>21,
          'course_id'=>4,
          'total_questions'=>5,
          'due_date'=>date("Y-m-d",mktime(22,0,0,10,23,2021)),
          'category'=>'final',
        ]);
    }
}
