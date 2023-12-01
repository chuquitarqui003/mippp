<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md mr-4">
        <img src="{{ asset('img/upeulogo.png') }}" alt="Descripción de la imagen" class="h-full w-full object-cover object-center lg:h-full lg:w-full">

        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 mb-20"></h2>

        <!-- Contenido del primer card -->
        @foreach ($presentations as $item)
        <form class="mt-8 space-y-6" action="#" method="POST">
            <!-- ... Tus campos de formulario ... -->

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500 ">Estado</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_presentacion_estado}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Ruta:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_presentacion_ruta}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Solicitada:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_presentacion_fecha_solicitud}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Recibida:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_presentacion_fecha_recibida}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Estudiante:</p>
                </div>
                <p class="text-sm font-medium text-gray-900">

                    @if ($item->student)
                    {{ $item->student->estudiante_nombre}}
                @else
                    Sin historia asociada
                @endif
                </p>
            </div>

            <!-- Delete Button -->

            <x-button wire:click="$emit('deleteItem2',{{ $item->id }})">
                Descargar Carta de Presentación
            </x-button>

            @endforeach

        </form>



        @push('js')
       <script>
         Livewire.on('deleteItem2',id=>{
           Swal.fire({
             title: 'Estas Seguro?',
             text: "Solo te quedan 2 intentos de envío!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Si, Cancelar Envio!'
             }).then((result) => {
               if (result.isConfirmed) {
                   //alert("del");
                   Livewire.emitTo('crud-aceptation','delete',id);
                   Swal.fire(
                       'Deleted!',
                       'Your file has been deleted.',
                       'success'
                   )

               }
             })
         });
       </script>
     @endpush

    </div>

            <!-- Contenido del segundo card -->
            <!-- Contenido del segundo card -->
            <!-- Contenido del segundo card -->
            <!-- Contenido del segundo card -->
            <!-- Contenido del segundo card -->

   <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form>
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">IMPORTANTE ¡¡¡</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Esta información se mostrará a la Central Para redactar su Carta de Presentacion, asegúrese de que sus datos
            sean correctos
        </p>


          <div class="col-span-full">
            <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
            <div class="mt-2 flex items-center gap-x-3">
              <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>


        </div>
      </div>

      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Validar Datos </h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Trata de usar un Correo permanente donde puedas recibir las notificaciones.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre Completo</label>
            <div class="mt-2">

                <p class="text-sm font-medium text-gray-900">

                    @if ($item->student)
                    {{ $item->student->estudiante_nombre}}
                @else
                    Sin historia asociada
                @endif
                </p>

            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Apellido Paterno</label>
            <div class="mt-2">

                <p class="text-sm font-medium text-gray-900">

                    @if ($item->student)
                    {{ $item->student->estudiante_ap_materno}}
                @else
                    Sin historia asociada
                @endif
                </p>

            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Apellido Materno</label>
            <div class="mt-2">

                <p class="text-sm font-medium text-gray-900">

                    @if ($item->student)
                    {{ $item->student->estudiante_ap_paterno}}
                @else
                    Sin historia asociada
                @endif
                </p>

            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Codigo del Estudiante</label>
            <div class="mt-2">

                <p class="text-sm font-medium text-gray-900">

                    @if ($item->student)
                    {{ $item->student->estudiante_codigo}}
                @else
                    Sin historia asociada
                @endif
                </p>

            </div>
          </div>
          <div class="sm:col-span-2 sm:col-start-1">
            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Correo de Contacto</label>
            <div class="mt-2">
              <input type="text" name="estudiante_correo" id="estudiante_correo" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Telefono de Contacto</label>
            <div class="mt-2">
              <input type="text" name="estudiante_telefono" id="estudiante_telefono" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>


        </div>
      </div>
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </div>


  </form>

</div>

