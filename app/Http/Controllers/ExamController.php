<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $exams = Exam::where('exams.course_id', '=', Auth::user()->default_course)
        ->with('schedule')
        ->with(['users' => function ($query)
        {
          $query->where('users.id', '=', 2)
            ->select('users.id');
        }])
        ->get();
      // return $exams;
      return view('student.exam', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $correctAnswer = Question::orderBy('id')
        ->where('exam_id', '=', $request->exam_id)
        ->select('answer')
        ->get();
      $score = 0;
      $maxScore = count($correctAnswer);
      $userId = Auth::id();
      $i = 0;

      foreach ($request->question as $key => $answer) {
        if ($answer==$correctAnswer[$i]->answer) {
          $score ++;
        }
        DB::table('question_user')->insert([
          'id' => $key.'_'.$userId,
          'question_id' => $key,
          'user_id' => $userId,
          'answer' => $answer
        ]);
        $i++;
      }

      $finalScore = $score/$maxScore*100;
      
      DB::table('exam_user')->insert([
        'id' => $userId.'_'.$request->exam_id,
        'exam_id' => intval($request->exam_id),
        'user_id' => $userId,
        'score' => $finalScore
      ]);

      return redirect(route('exam.index'))->with('status', 'Alhamdulillah, soal evaluasi sudah selesai dikerjakan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $examData = Exam::where('exams.id', '=', $id)
        ->with(['users' => function ($query) {
            $query->where('users.id', '=', Auth::id());
          }])
        ->join('schedules', 'exams.schedule_id', '=', 'schedules.id')
        ->select('exams.*', 'exams.id as theId', 'schedules.topic', 'schedules.sub_topic')
        ->first();
        
      $questions = Question::with(['options'=>function ($query)
        {
          $query->orderBy('key');
        }])
        ->orderBy('id')
        ->where('exam_id', '=', $id)
        ->get();
      
      // reject direct access if not valid
      if ($examData->course_id != Auth::user()->default_course) {
        return back()->with('warning', 'Halaman tidak dapat diakses.');
      }

      // return show if user already filling
      if (count($examData->users)) {
        $questionId = [];
        foreach ($questions as $question) {
          array_push($questionId, $question->id);
        }
        
        $answers = DB::table('question_user')
          ->where('user_id', '=', Auth::id())
          ->whereIn('question_id', $questionId)
          ->orderBy('question_id')
          ->get();
        // return compact('examData', 'questions', 'answers');
        return view('student.examShow', compact('examData', 'questions', 'answers'));
      };

      // default return create if user hasn't filling
      
      // return compact('examData', 'questions');
      return view('student.examCreate', compact('examData', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
