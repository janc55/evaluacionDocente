<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form action="{{ route('gestiones.store') }}" method="POST">
                    @csrf
                    <div>
                        <x-label class="mb-4" for="nombre">Gestión</x-label>
                        <x-input name="nombre" class="block mt-1 w-full" type="text"/>
                    </div>
                    
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ms-4">
                            Guardar
                        </x-button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
</x-app-layout>