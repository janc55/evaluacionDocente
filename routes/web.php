<?php

use App\Http\Controllers\AsignacionEstudianteController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DesignacionMateriaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\MateriaController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('gestiones', GestionController::class);
    Route::resource('carreras', CarreraController::class);
    Route::resource('materias', MateriaController::class);
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('docentes', DocenteController::class);
    Route::resource('designacion-materias', DesignacionMateriaController::class);
    Route::get('asignaciones/{estudiante}/materias-asignadas', [AsignacionEstudianteController::class, 'asignacion'])->name('asignaciones.estudiante');
    Route::resource('evaluaciones', EvaluacionController::class);
    Route::get('evaluacion/{materia_asignada}', [EvaluacionController::class, 'evaluacion'])->name('evaluacion.materia');
    
});
