<?php

namespace App\Http\Controllers;

use App\Models\DesignacionMateria;
use App\Models\Docente;
use App\Models\Gestion;
use App\Models\Materia;
use Illuminate\Http\Request;

class DesignacionMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designacionMaterias = DesignacionMateria::with(['materia', 'gestion', 'docente'])->get();
        return view('admin.designacion-materias.index', compact('designacionMaterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materias = Materia::all(); // Reemplaza 'Materia' con el nombre real de tu modelo de materias
        $gestiones = Gestion::all(); // Reemplaza 'Gestion' con el nombre real de tu modelo de gestiones
        $docentes = Docente::all(); // Reemplaza 'Docente' con el nombre real de tu modelo de docentes

        return view('admin.designacion-materias.create', compact('materias', 'gestiones', 'docentes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'materia_id' => 'required|exists:materias,id',
            'gestion_id' => 'required|exists:gestions,id',
            'docente_id' => 'required|exists:docentes,id',
            'turno' => 'required|in:Mañana,Tarde,Noche',
            'paralelo' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        // Crear la nueva asignación de materia
        $asignacion = new DesignacionMateria;
        $asignacion->materia_id = $request->materia_id;
        $asignacion->gestion_id = $request->gestion_id;
        $asignacion->docente_id = $request->docente_id;
        $asignacion->turno = $request->turno;
        $asignacion->paralelo = $request->paralelo;
        $asignacion->fecha_inicio = $request->fecha_inicio;
        $asignacion->fecha_fin = $request->fecha_fin;

        // Guardar la asignación en la base de datos
        $asignacion->save();

        // Redireccionar a la vista de asignaciones o a donde desees
        return redirect()->route('designacion-materias.index')->with('success', 'Asignación de materia creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DesignacionMateria $designacionMateria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DesignacionMateria $designacionMateria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DesignacionMateria $designacionMateria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DesignacionMateria $designacionMateria)
    {
        //
    }
}
