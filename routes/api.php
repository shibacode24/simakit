<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login',[ApiController::class,'login']);
Route::post('survey',[ApiController::class,'survey']);
Route::post('get_survey',[ApiController::class,'get_survey']);
Route::get('get_user',[ApiController::class,'get_user']);
Route::get('get_survey',[ApiController::class,'get_survey']);
Route::get('get_count',[ApiController::class,'get_count']);

