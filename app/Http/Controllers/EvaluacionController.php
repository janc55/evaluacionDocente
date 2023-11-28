<?php

namespace App\Http\Controllers;

use App\Models\DesignacionMateria;
use App\Models\Evaluacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designacionMaterias = DesignacionMateria::with(['materia', 'gestion', 'docente'])->get();
        return view('evaluaciones.index', compact('designacionMaterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evaluaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Registrar en evaluacion_estudiante
        $user = Auth::user(); // Asegúrate de tener una relación entre User y Estudiante
        //dd($user);
        $estudiante = $user->estudiante;
        //dd($estudiante); // Verifica que obtienes el estudiante
        $estudiante->evaluacionesRealizadas()->attach($request->input('designacion_materia_id'), ['evaluacion_realizada' => true]);

        // Crea una nueva evaluación en la base de datos
        $evaluacion = new Evaluacion();
        $evaluacion->pregunta1 = $request->input('pregunta1');
        $evaluacion->pregunta2 = $request->input('pregunta2');
        $evaluacion->pregunta3 = $request->input('pregunta3');
        $evaluacion->pregunta4 = $request->input('pregunta4');
        $evaluacion->pregunta5 = $request->input('pregunta5');
        $evaluacion->pregunta6 = $request->input('pregunta6');
        $evaluacion->pregunta7 = $request->input('pregunta7');
        $evaluacion->pregunta8 = $request->input('pregunta8');
        $evaluacion->pregunta9 = $request->input('pregunta9');
        $evaluacion->pregunta10 = $request->input('pregunta10');

        $evaluacion->designacion_materia_id = $request->input('designacion_materia_id');
        // Agrega todos los campos necesarios

        $evaluacion->save();

        return redirect()->route('evaluaciones.index')->with(['success' => 'Evaluación creada exitosamente.', 'estudiante' => $estudiante]);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluacion $evaluacion)
    {
        //
    }

    public function evaluacion($materia_asignada)
    {
        $materia_asignada = DesignacionMateria::where('id', $materia_asignada)
            ->with(['gestion', 'materia'])
            ->first();
        return view('evaluaciones.create', compact('materia_asignada'));
    }
}
