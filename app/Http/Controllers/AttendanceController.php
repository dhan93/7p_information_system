<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Attendance;
// use Illuminate\Auth\Events\Validated;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $schedules = DB::table('schedules')
        ->where('course_id', '=', Auth::user()->default_course)
        ->where('time', '<', NOW())
        ->select('id', 'topic', 'sub_topic')
        ->get();
        
      $attendances = Attendance::join('schedules', 'attendances.schedule_id', '=', 'schedules.id')
        ->where('course_id', Auth::user()->default_course)
        ->orderBy('schedules.time')
        ->get();

      $filledSchedules = [];

      foreach ($attendances as $attendance) {
        array_push($filledSchedules, $attendance->schedule_id);
      }

      $scheduleOptions = [];

      foreach ($schedules as $schedule) {
        if (! in_array($schedule->id, $filledSchedules)) {
          array_push($scheduleOptions, $schedule);
        }
      }
      
      // return compact('scheduleOptions');
      return view('student.attendance', compact('attendances', 'scheduleOptions'));
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
      // return $request;

      // $validated = $request->validate([
      //   // topic	"1"
      //   'topic' => 'required|exists:schedules,id',
      //   // status	"true"
      //   'status' => 'required|boolean',
      //   // attendance_time	"19:45"
      //   'attendance_time' => 'sometimes|date_format:H:i',
      //   // channel	"zoom"
      //   'channel' => 'required',
      //   // full_attendance	"true"
      //   'full_attendance' => 'sometimes|boolean',
      //   // absence_reason	null
      //   'absence_reason' => 'nullable|max:100'
      // ]);

      $validated = Validator::make($request->all(), [
          // topic	"1"
          'topic' => 'required|exists:schedules,id',
          // status	"true"
          'status' => [
            'required',
            Rule::in(['hadir', 'izin']),
          ],
          // attendance_time	"19:45"
          'attendance_time' => 'sometimes|date_format:H:i',
          // channel	"zoom"
          'channel' => [
            'required',
            Rule::in(['zoom', 'youtube', 'youtube live', '-']),
          ],
          // full_attendance	"true"
          'full_attendance' => [
            'sometimes',
            Rule::in(['true', 'false']),
          ],
          // absence_reason	null
          'absence_reason' => 'nullable|max:100'
      ])->validate();
      
      $time_in = NULL;
      $until_finish = NULL;
      $note = NULL;

      if ($validated['status'] == 'hadir') {
        $time_in = $validated['attendance_time'];
        $until_finish = $validated['full_attendance'] == 'true' ? true:false;
      } else {
        $note = $validated['absence_reason'];
      };
      
      // return $validated;
      // $storedData = DB::table('attendances')->insert([
      $storedData = Attendance::create([
        'schedule_id' => $validated['topic'],
        'user_id' => Auth::id(),
        'status' => $validated['status'],
        'channel' => $validated['channel'],
        'time_in' => $time_in,
        'until_finish' => $until_finish,
        'note' => $note
      ]);

      if($storedData) {
        return back()->with('status', 'successfully inserted');
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
        //
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
