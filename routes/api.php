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

/* 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::get('login', [App\Http\Controllers\AuthController::class, 'noLogin'])->name('nologin');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout',  [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
        Route::get('user',  [App\Http\Controllers\AuthController::class, 'user'])->name('user');
    });
});

Route::group([
    'prefix' => 'sensores'
], function () {
    Route::get('temperatura', [App\Http\Controllers\SensorTemperaturaController::class, 'showTemperatura'])->name('temperatura');
    Route::get('humedad', [App\Http\Controllers\SensorHumedadController::class, 'showHumedad'])->name('humedad');
    Route::get('humedadr', [App\Http\Controllers\SensorHumedadRelativaController::class, 'showHumedadRelativa'])->name('humedadrelativa');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::post('temperatura', [App\Http\Controllers\SensorTemperaturaController::class, 'addTemperatura'])->name('temperatura');
        Route::post('humedad', [App\Http\Controllers\SensorHumedadController::class, 'addHumedad'])->name('humedad');
        Route::post('humedadr', [App\Http\Controllers\SensorHumedadRelativaController::class, 'addHumedadRelativa'])->name('humedadrelativa');
    });
});