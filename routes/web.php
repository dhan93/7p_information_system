<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/dashboard', function () {
//     return view('student.dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
  // Route::get('/', function () {
  //   return view('student.dashboard');
  // })->name('home');

  Route::get('/', ['App\Http\Controllers\ScheduleController', 'index'])->name('dashboard');
  Route::get('/dashboard', ['App\Http\Controllers\ScheduleController', 'index'])->name('home');

  Route::resource('attendance', 'App\Http\Controllers\AttendanceController');
  Route::resource('schedule', 'App\Http\Controllers\ScheduleController');    
  Route::resource('module', 'App\Http\Controllers\ModuleController');    
  Route::resource('daily_activity', 'App\Http\Controllers\DailyActivityController');    
  Route::resource('assignment', 'App\Http\Controllers\AssignmentController');    
  Route::resource('exam', 'App\Http\Controllers\ExamController');
  Route::resource('guide', 'App\Http\Controllers\UserGuideController');
  Route::post('/user/change_course', ['App\Http\Controllers\UserController', 'courseChanger'])->name('changeCourse');
});


require __DIR__.'/auth.php';
