<?php

namespace App\Http\Controllers;

// use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\UserActivity;
use App\Models\ActivityGroup;

class DailyActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $day = 1;
      $month = 9;
      $year = 2021;
      $interval = 15;

      $date_start = date("Y-m-d",mktime(0,0,0,$month,$day,$year));
      $date_end = date("Y-m-d",mktime(0,0,0,$month,$day+$interval,$year));
      
      $userActivities = UserActivity::where('user_id', Auth::user()->id)
        ->where('course_id', Auth::user()->default_course)
        ->whereBetween('date', [$date_start, $date_end])
        ->get();
      // return $userActivities;
      $activityGroup = ActivityGroup::where('course_id', Auth::user()->default_course)
        ->with('activities')
        ->get();

      $activitiesArray = [];
      foreach ($userActivities as $userActivity) {
        $data = array_column(json_decode($userActivity->activities, true), 'activities');
        $activitiesArray[strval(substr($userActivity->date, 8,2))] = call_user_func_array('array_merge', $data);
      }
      
      // return $activitiesArray;

      $matrix = [];
      foreach ($activityGroup as $group) {
        foreach ($group->activities as $activity) {
          $m_title = $activity->title;
          $m_date = [];
          for ($i=0; $i<$interval ; $i++) { 
            $m_date[$day+$i] = false;
            if (isset($activitiesArray[$day+$i])) {
              if (in_array($activity->id, $activitiesArray[$day+$i])) {
                $m_date[$day+$i] = true;
              }
            }
          }
          array_push($matrix, ['title'=>$m_title, 'date'=>$m_date]);
        }
      }

      // return compact('matrix');
      return view('student.dailyActivity', compact('activityGroup','userActivities', 'matrix'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $activities = ActivityGroup::with('activities')
        ->where('course_id', '=', Auth::user()->default_course)
        ->get();
      // return $activities;
      return view('student.dailyActivityCreate', compact('activities'));
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
      $activitiesArray = [];
      $activities_done = 0;

      $checkbox = $request->checkbox;
      
      if ($checkbox) {
        foreach ($checkbox as $group => $items) {
          $activityGroup = $group;
          $activities = [];
          foreach ($items as $item) {
            array_push($activities, intval($item));
            $activities_done += 1;
          }
          array_push($activitiesArray, ['activity_group'=>$activityGroup, 'activities'=>$activities]);
        }
      }

      $radio = $request->radio;
      if ($radio) {
        foreach ($radio as $group => $item) {
          if (intval($item) != 0) {
            array_push($activitiesArray, ['activity_group'=>$group, 'activities'=>intval($item)]);
          }
          $activities_done += 1;
        }
      }      

      $data = [
        'id' => Auth::id().'_'.Auth::user()->default_course.'_'.$request->date,
        'user_id' => Auth::id(),
        'date'=> $request->date,
        'activities' => json_encode($activitiesArray),
        'note' => $request->note,
        'course_id' => Auth::user()->default_course,
        'activities_done' => $activities_done,
        'total_activities' => $request->total_activities,
      ];

      $rules = [
        'date' => 'required|date_format:Y-m-d',
        'id' => 'unique:user_activities,id',
      ];

      $errorMessage = [
        'id.unique' => 'Amalan harian pada tanggal yang dipilih sudah pernah diisi'
      ];

      $validated = Validator::make($data, $rules, $errorMessage)->validate();

      if ($validated) {
        $storedData = UserActivity::create($data);
      }

      if($storedData) {
        return redirect(route('daily_activity.index'))->with('status', 'Data telah disimpan');
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
