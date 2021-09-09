<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Schedule;
use App\Models\Course;
use App\Models\ScheduleLink;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $defaultCourse = 4;
      if (Auth::user()->default_course) {
        $defaultCourse = Auth::user()->default_course;
      }
      $course = Course::find($defaultCourse);
      $schedules = Schedule::where('course_id', $defaultCourse)
        ->with('scheduleLinks')
        ->orderBy('time', 'asc')
        ->get();
      // return compact('course', 'schedules');
      return view('admin.schedule.index', compact('schedules', 'course'));
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
        //
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
      $schedule = Schedule::with('scheduleLinks:id,schedule_id,channel,link')
        ->find($id);
      // return $schedule;
      return view('admin.schedule.edit', compact('schedule'));
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
      $scheduleLinks = ScheduleLink::where('schedule_id', '=', $id)
        ->select('id')
        ->get()
        ->toArray();
      $scheduleIds = [];
      foreach ($scheduleLinks as  $link) {
        array_push($scheduleIds, $link['id']);
      }
      
      $rules = [
        'topic' => 'string|required',
        'sub_topic' => 'string|nullable',
        'lecturer' => 'string|required',
        'date' => 'required|date_format:Y-m-d',
        'time' => 'required|date_format:H:i',
        'links.*.channel' => 'nullable|sometimes|string',
        'links.*.link' => 'nullable|sometimes|url',
        'links.*.id' => ['nullable', 'sometimes', Rule::in($scheduleIds)],
        'deleted_links.*' => ['nullable','sometimes', Rule::in($scheduleIds)]
      ];

      $errorMessage = [
        'required' => 'Kolom :attribute harus diisi.',
        'numeric' => 'Kolom :attribute harus berupa angka',
        'exists' => 'Kolom :attribute tidak valid',
      ];

      $attributes = [
        'title' => 'JUDUL',
        'schedule_id' => 'JADWAL',
      ];

      $validated = Validator::make($request->all(), $rules, $errorMessage, $attributes)->validate();

      $scheduleData = [
        'topic' => $validated['topic'],
        'sub_topic' => $validated['sub_topic'],
        'lecturer' => $validated['lecturer'],
        'time' => $validated['date'].' '.$validated['time'],
      ];

      // schedule update
      Schedule::find($id)
        ->update($scheduleData);

      // link delete
      if (isset($validated['deleted_links'])) {
        ScheduleLink::whereIn('id', $validated['deleted_links'])
          ->delete();
      }

      if (isset($validated['links'])) {
        foreach ($validated['links'] as $link) {
          if ($link['id']) { // link update
            ScheduleLink::find($link['id'])
              ->update([
                'channel' => strtolower($link['channel']),
                'link' => $link['link'],
              ]);
          } else {// link create
            ScheduleLink::create([
              'schedule_id' => $id,
              'channel' => strtolower($link['channel']),
              'link' => $link['link'],
            ]);
          }
        }
      }
      
      // if($storedData) {
        return redirect(route('admin.schedule.index'))->with('status', 'Jadwal '.$request->topic.' berhasil diperbarui');
      // };
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
