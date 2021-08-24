<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->middleware(['auth', 'ismanagement'])->group(function () {
  Route::get('/dashboard', function () {
      return view('admin.dashboard');
  })->name('dashboard');

  Route::resource('course', 'App\Http\Controllers\Admin\CourseController');
  Route::resource('schedule', 'App\Http\Controllers\Admin\ScheduleController');
});