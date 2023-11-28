<?php

namespace App\Http\Controllers;

use App\Models\AsignacionEstudiante;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class AsignacionEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        $asignaciones = AsignacionEstudiante::where('estudiante_id', $estudiante->id)
            ->with(['gestion', 'materia'])
            ->get();

        return view('admin.estudiantes.asignacion', compact('estudiante', 'asignaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AsignacionEstudiante $asignacionEstudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AsignacionEstudiante $asignacionEstudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AsignacionEstudiante $asignacionEstudiante)
    {
        //
    }

    public function asignacion(Estudiante $estudiante)
    {
        $asignaciones = AsignacionEstudiante::where('estudiante_id', $estudiante->id)
            ->with(['gestion', 'designacionMateria.materia'])
            ->get();

        return view('admin.estudiantes.asignacion', compact('estudiante', 'asignaciones'));
    }
}
