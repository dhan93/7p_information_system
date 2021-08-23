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
          'id'=>1,
          'schedule_id'=>2,
          'course_id'=>4,
          'total_questions'=>5,
          'due_date'=>date("Y-m-d",mktime(19,45,0,9,8,2021)),
          'category'=>'pre',
        ]);
        Exam::create([
          'id'=>2,
          'schedule_id'=>20,
          'course_id'=>4,
          'total_questions'=>5,
          'due_date'=>date("Y-m-d",mktime(22,0,0,10,22,2021)),
          'category'=>'final',
        ]);
        Exam::create([
          'id'=>3,
          'schedule_id'=>21,
          'course_id'=>4,
          'total_questions'=>5,
          'due_date'=>date("Y-m-d",mktime(22,0,0,10,23,2021)),
          'category'=>'final',
        ]);

        // exam 1
        Question::create([
          'id'=>1,
          'exam_id'=>1,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'a'
        ]);
        Question::create([
          'id'=>2,
          'exam_id'=>1,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'b'
        ]);
        Question::create([
          'id'=>3,
          'exam_id'=>1,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'a'
        ]);
        Question::create([
          'id'=>4,
          'exam_id'=>1,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'b'
        ]);
        Question::create([
          'id'=>5,
          'exam_id'=>1,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'a'
        ]);

        // exam 2
        Question::create([
          'id'=>6,
          'exam_id'=>2,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'a'
        ]);
        Question::create([
          'id'=>7,
          'exam_id'=>2,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'b'
        ]);
        Question::create([
          'id'=>8,
          'exam_id'=>2,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'a'
        ]);
        Question::create([
          'id'=>9,
          'exam_id'=>2,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'b'
        ]);
        Question::create([
          'id'=>10,
          'exam_id'=>2,
          'text'=>'apakah jawaban dari pertanyaan ini?',
          'answer'=>'a'
        ]);

        QuestionOption::create([
          'question_id' => 1,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 1,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 2,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 2,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 3,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 3,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 4,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 4,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 5,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 5,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 6,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 6,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 7,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 7,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 8,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 8,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 9,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 9,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        QuestionOption::create([
          'question_id' => 10,
          'text' => 'pilihan A',
          'key' => 'a',
        ]);
        QuestionOption::create([
          'question_id' => 10,
          'text' => 'pilihan B',
          'key' => 'b',
        ]);

        // DB::table('question_user')->insert([
        //   ['id'=>'1_2','user_id'=>2, 'question_id'=>1, 'answer'=>'a'],
        //   ['id'=>'2_2','user_id'=>2, 'question_id'=>2, 'answer'=>'a'],
        //   ['id'=>'3_2','user_id'=>2, 'question_id'=>3, 'answer'=>'a'],
        //   ['id'=>'4_2','user_id'=>2, 'question_id'=>4, 'answer'=>'a'],
        //   ['id'=>'5_2','user_id'=>2, 'question_id'=>5, 'answer'=>'a'],
        //   ['id'=>'6_2','user_id'=>2, 'question_id'=>6, 'answer'=>'b'],
        //   ['id'=>'7_2','user_id'=>2, 'question_id'=>7, 'answer'=>'b'],
        //   ['id'=>'8_2','user_id'=>2, 'question_id'=>8, 'answer'=>'b'],
        //   ['id'=>'9_2','user_id'=>2, 'question_id'=>9, 'answer'=>'b'],
        //   ['id'=>'10_2','user_id'=>2, 'question_id'=>10, 'answer'=>'b'],
        // ]);

        // DB::table('exam_user')->insert([
        //   ['id'=> '1_2', 'user_id'=>2, 'exam_id'=>1, 'score'=>60.0],
        //   // ['user_id'=>2, 'exam_id'=>2, 'score'=>NULL],
        // ]);
    }
}
