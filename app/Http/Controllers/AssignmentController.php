<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assignment;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $assignments = Schedule::where('course_id', '=', Auth::user()->default_course)
        ->select('id', 'topic', 'sub_topic', 'course_id', 'time')
        ->Has('assignments')
        ->withCount([
          'assignments', 
          'assignments as assignment_done' => function ($query) {
            $query->join('assignment_user', 'assignments.id', '=', 'assignment_user.assignment_id')
              ->where('assignment_user.user_id', '=', Auth::id())
              ->where('assignment_user.status', '=', '1');
          },
          ])
        ->get();
      // return $assignments;
      return view('student.assignment', compact('assignments'));
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
      $assignments = Assignment::where('schedule_id', '=', $request->schedule_id)
        ->select('id')
        ->get();
        
      $user = Auth::id();
      $data = [];

      foreach ($assignments as $assignment) {
        $status = 0;
        if (isset($request->assignment[$assignment->id])) {
          $status = 1;
        }
        $newData = [
          'id' => $assignment->id.'_'.$user,
          'assignment_id' => $assignment->id,
          'user_id' => $user,
          'status' => $status
        ]; 
        array_push($data, $newData);
      }

      $storedData = DB::table('assignment_user')->upsert($data, ['id', 'assignment_id', 'user_id', 'status']);

      if($storedData) {
        return redirect(route('assignment.index'))->with('status', 'Data telah disimpan, terima kasih :)');
      };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $schedule = Schedule::select('id', 'topic', 'sub_topic')
        ->find($id);
      $assignments = Assignment::where('schedule_id', '=', $id)
        ->get();
      $assignmentDone = DB::table('assignment_user')
        ->where('user_id', '=', Auth::id())
        ->where('status', '=', 1)
        ->select('assignment_id')
        ->get();
      
      $assignmentDoneArray = [];
      for ($i=0; $i < count($assignmentDone); $i++) { 
        $assignmentDoneArray[$i] = $assignmentDone[$i]->assignment_id;
      }
      // return $assignmentDoneArray;
      return view('student.assignmentShow', compact('schedule', 'assignments', 'assignmentDoneArray'));
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
