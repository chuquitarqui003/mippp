<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Convocatorias Disponibles') }}
        </h2>
    </x-slot>

    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

        <!-- Aqui empieza la Fila de Primeros Cards -->

<div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-3 lg:grid-cols-3 xl:gap-x-8">
        <!-- Card 1 -->

        <div class="group relative">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Especialista en Redes</h2>

            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="{{ asset('img/imagen1.png') }}" alt="Descripción de la imagen" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>

            <!-- Lo conectaremos con la base de datos... -->

            <div class="mt-4 flex flex-col ">
                <p class="mt-1 text-sm text-gray-500">Descripción</p>
                <p class="mt-2 text-sm text-gray-900 mr-1">
                    Aquí va tu descripción. Puedes agregar el texto que desees en este párrafo.
                </p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Estado:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">Activo</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Inicio</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/11/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Fin</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/12/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Cupos</p>
                </div>
                <p class="text-sm font-medium text-gray-900">3</p>
            </div>

            <a href="#" class="mt-4 inline-block px-6 py-2 bg-indigo-500 text-white font-semibold rounded-full">Ver detalles</a>

        </div>

        <!-- Card 2 -->
        <div class="group relative">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Desarrollador Back End</h2>

            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="{{ asset('img/imagen2.png') }}" alt="Descripción de la imagen" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>

            <!-- Lo conectaremos con la base de datos... -->

            <div class="mt-4 flex flex-col ">
                <p class="mt-1 text-sm text-gray-500">Descripción</p>
                <p class="mt-2 text-sm text-gray-900 mr-1">
                    Aquí va tu descripción. Puedes agregar el texto que desees en este párrafo.
                </p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Estado:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">Activo</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Inicio</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/11/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Fin</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/12/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Cupos</p>
                </div>
                <p class="text-sm font-medium text-gray-900">3</p>
            </div>
            <a href="#" class="mt-4 inline-block px-6 py-2 bg-indigo-500 text-white font-semibold rounded-full">Ver detalles</a>

        </div>

        <!-- Card 3 -->

        <div class="group relative">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Analista de Sistemas</h2>

            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="{{ asset('img/imagen3.png') }}" alt="Descripción de la imagen" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>

            <!-- Lo conectaremos con la base de datos... -->

            <div class="mt-4 flex flex-col ">
                <p class="mt-1 text-sm text-gray-500">Descripción</p>
                <p class="mt-2 text-sm text-gray-900 mr-1">
                    Aquí va tu descripción. Puedes agregar el texto que desees en este párrafo.
                </p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Estado:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">Activo</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Inicio</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/11/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Fin</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/12/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Cupos</p>
                </div>
                <p class="text-sm font-medium text-gray-900">3</p>
            </div>

            <a href="#" class="mt-4 inline-block px-6 py-2 bg-indigo-500 text-white font-semibold rounded-full">Ver detalles</a>

        </div>

        <!-- Repite el bloque para las cards 4, 5 y 6 -->
    </div>
</div>
        <!-- Aqui termina la Fila de Primeros Cards -->


        <div class="mx-auto max-w-screen-xl bg-white overflow-hidden shadow-md sm:rounded-lg mb-20">
            <div class="relative">
                <img class="h-64 w-full object-cover" src="{{ asset('img/large1.png') }}" alt="Descripción de la imagen">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-white">Proximamente</h1>
                        <p class="mt-2 text-lg text-gray-300">Una nueva forma de realizar tu Plan de Prácticas Pre Profesionales</p>
                        <a href="#" class="mt-4 inline-block px-6 py-2 bg-indigo-500 text-white font-semibold rounded-full">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-screen-xl bg-white overflow-hidden shadow-md sm:rounded-lg mb-20">
            <img class="h-64 w-full object-cover" src="{{ asset('img/large2.png') }}" alt="Descripción de la imagen">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-900">Desarrollador Front-End y Back-End</h1>
                <!-- Lo conectaremos con la base de datos... -->

            <div class=" mt-4 flex flex-col ">
                <p class="mt-1 text-sm text-gray-500">Descripción</p>
                <p class="mt-2 text-sm text-gray-900 mr-1">
                    Aquí va tu descripción. Puedes agregar el texto que desees en este párrafo.
                    Aquí va tu descripción. Puedes agregar el texto que desees en este párrafo.
                    Aquí va tu descripción. Puedes agregar el texto que desees en este párrafo.
                    Aquí va tu descripción. Puedes agregar el texto que desees en este párrafo.
                </p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Estado:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">Activo</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Inicio</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/11/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Convocatoria</p>
                </div>
                <p class="text-sm font-medium text-gray-900">11/12/23</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Cupos</p>
                </div>
                <p class="text-sm font-medium text-gray-900">3</p>
            </div>
            <a href="#" class="mt-4 inline-block px-6 py-2 bg-indigo-500 text-white font-semibold rounded-full">Ver detalles</a>

        </div>
            </div>











</x-app-layout>
