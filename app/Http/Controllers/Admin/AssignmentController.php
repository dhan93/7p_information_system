<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Assignment;
use App\Models\Schedule;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $assignments = Schedule::has('assignments')
        ->select('id', 'topic', 'sub_topic', 'course_id')
        ->with('course:id,name,generation')
        ->with('assignments')
        ->get();
      // return $assignments;
      return view('admin.assignment.index', compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $schedules = Schedule::select('id', 'topic', 'sub_topic')
        ->where('course_id', '=', 4)
        ->get();
      
      return view('admin.assignment.create', compact('schedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
        // title
        'title' => 'required',
        // schedule_id
        'schedule_id' => 'required|numeric|exists:schedules,id',
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

      $storedData = Assignment::create([
        'title' => $validated['title'],
        'schedule_id' => $validated['schedule_id']
      ]);

      if($storedData) {
        return back()->with('status', 'Tugas '.$request->title.' berhasil ditambahkan');
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
