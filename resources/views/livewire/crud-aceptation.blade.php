<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md mr-4">
        <img src="{{ asset('img/upeulogo.png') }}" alt="Descripción de la imagen" class="h-full w-full object-cover object-center lg:h-full lg:w-full">

        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 mb-20"></h2>

        <!-- Contenido del primer card -->
        @foreach ($aceptations as $item)
        <form class="mt-8 space-y-6" action="#" method="POST">
            <!-- ... Tus campos de formulario ... -->

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500 ">Estado</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_aceptacion_estado}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Ruta</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_aceptacion_ruta}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Fecha Envio</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_aceptacion_fecha_envio}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Hora Envio</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$item->carta_aceptacion_hora_envio}}</p>
            </div>

            <div class="mt-4 flex justify-between">
                <div>
                    <p class="mt-1 text-sm text-gray-500">Estado Participante</p>
                </div>
                <p class="text-sm font-medium text-gray-900">

                    @if ($item->participant)
                    {{ $item->participant->participante_estado}}
                @else
                    Sin historia asociada
                @endif
                </p>
            </div>

            <!-- Delete Button -->

            <x-danger-button wire:click="$emit('deleteItem2',{{ $item->id }})">
                Cancelar Envío
            </x-danger-button>

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

    <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md">
        <!-- Contenido del segundo card -->

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Selecciona tu Archivo en PDF</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <!-- Contenido del segundo card -->

                <div class="col-span-full">
                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Carta de Aceptacion</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                      <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                          <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                          </label>
                          <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                      </div>
                    </div>
                  </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md
                    bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white
                    shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2
                    focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <!-- Más contenido del segundo card -->


            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Se, innovador, Se misionero <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Upeu</a>
            </p>
        </div>
    </div>
</div>

