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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('destinos', [\App\Http\Controllers\DestinoController::class, 'index']);
Route::post('destinos', [\App\Http\Controllers\DestinoController::class, 'store']);
Route::post('destinos-actualizar', [\App\Http\Controllers\DestinoController::class, 'update']);
Route::post('destinos-eliminar', [\App\Http\Controllers\DestinoController::class, 'destroy']);
Route::get('destinos-top', [\App\Http\Controllers\DestinoController::class, 'top']);
Route::get('tours', [\App\Http\Controllers\TourController::class, 'index']);


