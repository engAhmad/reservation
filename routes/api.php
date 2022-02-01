<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CalculateController;

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
Route::resource('/v1/reservation', ReservationController::class)->only(['index','show','store', 'update', 'destroy']);
Route::get('/v1/reservation/{id}/calculate', [CalculateController::class, 'calculate']);
