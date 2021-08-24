<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth','isstudent'])->group(function () {
  Route::get('/', function () {
    if (Auth::user()->role_id == 2) { return redirect(route('admin.dashboard')); }
    return redirect(route('dashboard'));
  })->name('home');

  Route::post('/user/change_course', ['App\Http\Controllers\UserController', 'courseChanger'])
    ->name('changeCourse');
});



require __DIR__.'/student.php';
require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
