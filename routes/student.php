<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth','isstudent'])->group(function () {
  // Route::get('/', ['App\Http\Controllers\ScheduleController', 'index'])->name('dashboard');
  Route::get('/dashboard', ['App\Http\Controllers\ScheduleController', 'index'])->name('dashboard');

  Route::resource('attendance', 'App\Http\Controllers\AttendanceController');
  Route::resource('schedule', 'App\Http\Controllers\ScheduleController');    
  Route::resource('module', 'App\Http\Controllers\ModuleController');    
  Route::resource('daily_activity', 'App\Http\Controllers\DailyActivityController');    
  Route::resource('assignment', 'App\Http\Controllers\AssignmentController');    
  Route::resource('exam', 'App\Http\Controllers\ExamController');
  Route::resource('guide', 'App\Http\Controllers\UserGuideController');
});