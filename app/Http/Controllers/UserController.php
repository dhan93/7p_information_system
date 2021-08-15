<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
  public function courseChanger(Request $request)
  {
    $user = User::find(Auth::id());
    $user->default_course = $request->default_course;
    $user->save();

    return redirect(route($request->current_page));
  }
}
