<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Docente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-button-link class="ms-4 mb-4" href="{{ route('docentes.create') }}">Añadir Docente</x-button-link>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($docentes->isEmpty())
                        <p>No hay docentes.</p>
                    @else
                        <x-table>
                            <x-slot name="header">
                                <x-table-column>#</x-table-column>
                                <x-table-column>Nombre</x-table-column>
                                <x-table-column>Apellidos</x-table-column>
                                <x-table-column>Código de estudiante</x-table-column>
                                <x-table-column>Acciones</x-table-column>
                            </x-slot>
                            @foreach ($docentes as $docente)
                            <tr>
                                <x-table-column>{{ $docente->id }}</x-table-column>
                                <x-table-column>{{ $docente->doc_nombres }}</x-table-column>
                                <x-table-column>{{ $docente->doc_apellido_paterno }} {{ $docente->doc_apellido_materno }}</x-table-column>
                                <x-table-column>{{ $docente->doc_codigo }}</x-table-column>
                                <x-table-column>
                                        <x-button-link href="#">Ver Materias asignadas</x-button-link>
                                </x-table-column>
                            </tr>
                        @endforeach
                        </x-table>
                    @endif
            </div>
        </div>
    </div>
</x-app-layout>