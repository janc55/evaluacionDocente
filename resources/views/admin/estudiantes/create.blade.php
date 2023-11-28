<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mt-6 px-6 py-4 overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('estudiantes.store') }}" method="post">
                @csrf
                <x-label class="mb-4" for="est_nombres">Nombre</x-label>
                <x-input name="nombre" class="w-full mb-4" type="text"/>
                <x-label class="mb-4" for="est_paterno">Apellido Paterno</x-label>
                <x-input name="nombre" class="w-full mb-4" type="text"/>
                <x-label class="mb-4" for="est_materno">Apellido Materno</x-label>
                <x-input name="nombre" class="w-full mb-4" type="text"/>
                <x-label class="mb-4" for="est_ci">Cedula de identidad</x-label>
                <x-input name="nombre" class="w-full mb-4" type="text"/>

                <x-button class="ms-4" type="submit">
                    Guardar
                </x-button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>