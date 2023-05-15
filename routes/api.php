<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//   $persons = [
//     [
//       'name' => 'Manuel',
//       'age' => 20,
//       'gender' => 'male'
//     ]
//   ];

//   return response()->json($persons);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
