<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-button-link class="ms-4 mb-4" href="{{ route('gestiones.create') }}">Añadir Gestion</x-button-link>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if ($gestiones->isEmpty())
                    <p>No hay gestioness.</p>
                @else
                    <x-table>
                        <x-slot name="header">
                            <x-table-column>#</x-table-column>
                            <x-table-column>Gestion</x-table-column>
                            <x-table-column>Fecha de Inicio</x-table-column>
                            <x-table-column>Fecha de Finalización</x-table-column>
                            <x-table-column>Acciones</x-table-column>
                        </x-slot>
                        @foreach ($gestiones as $gestion)
                        <tr>
                            <x-table-column>{{ $gestion->id }}</x-table-column>
                            <x-table-column>{{ $gestion->nombre }}</x-table-column>
                            <x-table-column>{{ $gestion->fecha_inicio }}</x-table-column>
                            <x-table-column>{{ $gestion->fecha_fin }}</x-table-column>
                            <x-table-column>
                                    <x-button-link href="#">Editar</x-button-link>
                            </x-table-column>
                        </tr>
                    @endforeach
                    </x-table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>