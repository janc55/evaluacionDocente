<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Designacion de Materias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-button-link class="ms-4 mb-4" href="{{ route('designacion-materias.create') }}">Añadir Asignación</x-button-link>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-table>
                <x-slot name="header">
                    <x-table-column>Materia</x-table-column>
                    <x-table-column>Sigla</x-table-column>
                    <x-table-column>Semestre</x-table-column>
                    <x-table-column>Turno</x-table-column>
                    <x-table-column>Paralelo</x-table-column>
                    <x-table-column>Gestion</x-table-column>
                    <x-table-column>Docente</x-table-column>
                    <x-table-column>Acciones</x-table-column>
                </x-slot>
                @foreach($designacionMaterias as $designacion)
                    <tr>
                        <x-table-column>{{$designacion->materia->mat_nombre}}</x-table-column>
                        <x-table-column>{{$designacion->materia->mat_sigla}}</x-table-column>
                        <x-table-column>{{$designacion->materia->semestre}}</x-table-column>
                        <x-table-column>{{$designacion->turno}}</x-table-column>
                        <x-table-column>{{$designacion->paralelo}}</x-table-column>
                        <x-table-column>{{$designacion->gestion->nombre}}</x-table-column>
                        <x-table-column>{{$designacion->docente->doc_nombres}}</x-table-column>
                    </tr>
                @endforeach
            </x-table>
            </div>
        </div>
    </div>
</x-app-layout>