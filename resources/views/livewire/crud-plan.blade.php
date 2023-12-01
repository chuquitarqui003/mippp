<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="flex items-center justify-between">
                <!--Input de busqueda   -->
                <div class="flex items-center p-2 rounded-md flex-1">

                </div>
                <!--Boton nuevo   -->
                <div class="lg:ml-40 ml-10 space-x-8">
                    <button wire:click="create()"
                        class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        <i class="fa-solid fa-plus"></i> Nuevo
                    </button>
                    @if ($isOpen)
                        @include('livewire.plan-create')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-indigo-500 text-white">
                        <tr class="text-left text-xs font-bold  uppercase">
                            <td scope="col" class="px-6 py-3">ID</td>

                            <td scope="col" class="px-6 py-3">Fecha Inicio Plan</td>
                            <td scope="col" class="px-6 py-3">Fecha Fih Plan</td>
                            <td scope="col" class="px-6 py-3">Horas planificadas</td>
                            <td scope="col" class="px-6 py-3">Modalidad</td>
                            <td scope="col" class="px-6 py-3">Turbos</td>


                            <td scope="col" class="px-6 py-3">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($plans as $item)
                            <tr class="text-sm font-medium text-gray-900">
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $item->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">{{ $item->plan_f_inicio_plan }}</td>
                                <td class="px-6 py-4">{{ $item->plan_f_fin_plan }}</td>
                                <td class="px-6 py-4">{{ $item->plan_horas_planificadas }}</td>
                                <td class="px-6 py-4">{{ $item->plan_semanas_planificadas }}</td>
                                <td class="px-6 py-4">{{ $item->plan_modalidad }}</td>
                                <td class="px-6 py-4">{{ $item->plan_turnos }}</td>

                                {{-- @if ($item->supplier_id)
                        {{$item->supplier->nombre}}
                    @else
                        Proveedor no encontrado
                    @endif --}}
                                </td>
                                <td class="px-6 py-4">
                                    {{-- @livewire('cliente-edit',['cliente'=>$item],key($item->id)) --}}
                                    <x-button wire:click="edit({{ $item }})">
                                        <i class="fas fa-edit"></i>
                                    </x-button>
                                    <x-danger-button wire:click="$emit('deleteItem',{{ $item->id }})">
                                        <!-- Usamos metodos magicos -->
                                        <i class="fas fa-trash"></i>
                                    </x-danger-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if (!$plans->count())
                No existe ningun registro conincidente
            @endif
            @if ($plans->hasPages())
                <div class="px-6 py-3">
                    {{ $plans->links() }}
                </div>
            @endif
        </div>
    </div>

    <!--Scripts - Sweetalert   -->
    @push('js')
        <script>
            Livewire.on('deleteItem', id => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //alert("del");
                        Livewire.emitTo('crud-plan', 'delete', id);
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


    {{-- @livewire('calendar') --}}


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


            <a href="#"
                class="mt-4 inline-block px-6 py-2 bg-indigo-500 text-white font-semibold rounded-full">Ver detalles</a>

        </div>
    </div>
</div>
