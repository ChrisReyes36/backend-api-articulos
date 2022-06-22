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

Route::get('/articulos', [App\Http\Controllers\ArticuloController::class, 'index']); //muestra todos los registros
Route::get('/articulos/{id}', [App\Http\Controllers\ArticuloController::class, 'show']); //muestra un registro
Route::post('/articulos', [App\Http\Controllers\ArticuloController::class, 'store']); // crea un registro
Route::put('/articulos/{id}', [App\Http\Controllers\ArticuloController::class, 'update']); // actualiza un registro
Route::delete('/articulos/{id}', [App\Http\Controllers\ArticuloController::class, 'destroy']); // elimina un registro
