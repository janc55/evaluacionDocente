<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\MateriaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para gestion
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('gestiones', GestionController::class);
});

// Rutas para carreras
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('carreras', CarreraController::class);
});

// Rutas para materias
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('materias', MateriaController::class);
});