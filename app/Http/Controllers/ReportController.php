<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
  public function index()
  {
    $user = User::find(Auth::id());
    $report = DB::table('reports')
      ->where('user_id', '=', Auth::id())
      ->where('course_id', '=', Auth::user()->default_course)
      ->first();
    return view('student.report', compact('user', 'report'));
  }
}
