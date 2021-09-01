<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/user', function (Request $request) {
//     // return $request->user();
//     return response()->json([
//       'text' => 'hello world'
//     ]);
// });

// Route::middleware('auth')->get('/change_course', function () {
//   $affected = DB::table('users')
//               ->where('id', Auth::user()->id)
//               ->update(['default_course' => 1]);
//   if ($affected) {
//     return 200;
//   }  
// });