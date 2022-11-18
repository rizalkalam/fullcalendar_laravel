<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;


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

Route::get('calendar/index', [CalendarController::class, 'index']);
Route::post('calendar/create', [CalendarController::class, 'store']);
Route::patch('calendar/update/{id}', [CalendarController::class, 'update']);
Route::post('calendar/edit/{id}', [CalendarController::class, 'edit']);
Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
