<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evaluación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-2 overflow-hidden shadow-xl sm:rounded-lg">
                {{ $materia_asignada->materia->mat_nombre }}
                {{ $materia_asignada->docente->doc_nombres }}
                {{ $materia_asignada->docente->doc_apellido_paterno }}
                <form action="{{ route('evaluaciones.store') }}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <input type="hidden" name="designacion_materia_id" value="{{ $materia_asignada->id}}">
                    
                    <!-- Preguntas de la evaluación -->
                    <div>
                        <x-label for="pregunta1">Pregunta 1:</x-label>
                        <x-input type="range" name="pregunta1" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta1Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta2">Pregunta 2:</x-label>
                        <x-input type="range" name="pregunta2" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta2Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta3">Pregunta 3:</x-label>
                        <x-input type="range" name="pregunta3" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta3Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta4">Pregunta 4:</x-label>
                        <x-input type="range" name="pregunta4" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta4Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta5">Pregunta 5:</x-label>
                        <x-input type="range" name="pregunta5" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta5Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta6">Pregunta 6:</x-label>
                        <x-input type="range" name="pregunta6" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta6Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta7">Pregunta 7:</x-label>
                        <x-input type="range" name="pregunta7" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta7Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta8">Pregunta 8:</x-label>
                        <x-input type="range" name="pregunta8" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta8Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta9">Pregunta 9:</x-label>
                        <x-input type="range" name="pregunta9" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta9Valor">3</span></span>
                    </div>
                    <div>
                        <x-label for="pregunta10">Pregunta 10:</x-label>
                        <x-input type="range" name="pregunta10" min="1" max="5" step="1" required class="input-field-range w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"/>
                        <span class="ml-2 text-gray-700">Valor: <span id="pregunta10Valor">3</span></span>
                    </div>

                    <!-- ... otras preguntas ... -->
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ms-4">
                            Enviar Evaluación
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Script para mostrar el valor seleccionado en la escala
        document.querySelectorAll('.input-field-range').forEach(function (input) {
            input.addEventListener('input', function () {
                document.getElementById(input.name + 'Valor').innerText = input.value;
            });
        });
    </script>
</x-app-layout>