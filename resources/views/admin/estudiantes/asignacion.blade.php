<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-nav-link class="ms-4 mb-4" href="{{ route('estudiantes.create') }}">Añadir Estudiante</x-nav-link>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if ($asignaciones->isEmpty())
                <p>No hay materias asignadas.</p>
            @else
                <x-table>
                    <x-slot name="header">
                        <x-table-column>Gestión</x-table-column>
                        <x-table-column>Materia</x-table-column>
                        <x-table-column>Fecha de Asignación</x-table-column>
                        <x-table-column>Acciones</x-table-column>
                    </x-slot>
                    @foreach ($asignaciones as $asignacion)
                    <tr>
                        <x-table-column>{{ $asignacion->gestion->nombre }}</x-table-column>
                        <x-table-column>{{ $asignacion->designacionMateria->materia->mat_nombre }} {{ $asignacion->designacionMateria->materia->mat_sigla }}</x-table-column>
                        <x-table-column>{{ $asignacion->fecha_asignacion }}</x-table-column>
                        <x-table-column>
                            @if ($estudiante->evaluacionesRealizadas->contains($asignacion->designacionMateria->id))
                                <span class="text-success">Evaluación realizada</span>
                            @else
                                <a href="{{ route('evaluacion.materia', ['materia_asignada' => $asignacion->designacionMateria->id]) }}" class="btn btn-info">Evaluación</a>
                            @endif
                        </x-table-column>
                    </tr>
                @endforeach
                </x-table>
            @endif
            </div>
        </div>
    </div>
</x-app-layout>