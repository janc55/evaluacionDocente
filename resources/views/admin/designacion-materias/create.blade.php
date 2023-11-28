<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignación de materias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white mt-6 px-6 py-4 overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('designacion-materias.store') }}" method="post">
                @csrf

                <x-label class="mb-4" for="materia_id">Materia</x-label>
                <select name="materia_id" class="w-full mb-4">
                    @foreach($materias as $materia)
                        <option value="{{ $materia->id }}">{{ $materia->mat_nombre }}</option>
                    @endforeach
                </select>

                <x-label class="mb-4" for="gestion_id">Gestión</x-label>
                <select name="gestion_id" class="w-full mb-4">
                    @foreach($gestiones as $gestion)
                        <option value="{{ $gestion->id }}">{{ $gestion->nombre }}</option>
                    @endforeach
                </select>

                <x-label class="mb-4" for="docente_id">Docente</x-label>
                <select name="docente_id" class="w-full mb-4">
                    @foreach($docentes as $docente)
                        <option value="{{ $docente->id }}">{{ $docente->doc_nombres }} {{ $docente->doc_apellido_paterno }}</option>
                    @endforeach
                </select>

                <x-label class="mb-4" for="turno">Turno</x-label>
                <select name="turno" class="w-full mb-4">
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>

                <x-label class="mb-4" for="paralelo">Paralelo</x-label>
                <x-input name="paralelo" class="w-full mb-4" type="text"/>

                <x-label class="mb-4" for="fecha_inicio">Fecha de Inicio</x-label>
                <x-input name="fecha_inicio" class="w-full mb-4" type="date"/>

                <x-label class="mb-4" for="fecha_fin">Fecha de Fin</x-label>
                <x-input name="fecha_fin" class="w-full mb-4" type="date"/>

                <x-button class="ms-4" type="submit">
                    Guardar
                </x-button>
            </form>
        </div>
        </div>
    </div>
</x-app-layout>