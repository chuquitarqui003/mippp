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

            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($plans as $item)
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6 bg-indigo-500 text-white">
                            <h3 class="text-lg leading-6 font-medium">Plan ID: {{ $item->id }}</h3>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Fecha Inicio Plan</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $item->plan_f_inicio_plan }}</dd>
                                    <dt class="text-sm font-medium text-gray-500">Fecha Fin Plan</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $item->plan_f_fin_plan }}</dd>
                                    <dt class="text-sm font-medium text-gray-500">Horas planificadas</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $item->plan_horas_planificadas }}</dd>

                                    <dt class="text-sm font-medium text-gray-500">Semanas Planificadas</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $item->plan_semanas_planificadas }}</dd>
                                    <dt class="text-sm font-medium text-gray-500">Modalidad</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $item->plan_modalidad }}</dd>
                                    <dt class="text-sm font-medium text-gray-500">Turnos</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $item->plan_turnos }}</dd>
                                </div>

                                <!-- Repetir para cada campo -->
                            </dl>
                        </div>
                        <div class="px-4 py-4 sm:px-6 flex justify-between">
                            <x-button wire:click="edit({{ $item }})"
                                class="text-indigo-600 hover:text-indigo-900">
                                <i class="fas fa-edit"></i> Editar
                            </x-button>
                            <x-danger-button wire:click="$emit('deleteItem',{{ $item->id }})"
                                class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash"></i> Eliminar
                            </x-danger-button>
                        </div>
                    </div>
                @endforeach
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

    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-center mb-4">
                <!-- Iconos de redes sociales -->
                <a href="https://facebook.com" target="_blank" class="mx-2">
                    <img src="path_to_facebook_icon.png" alt="Facebook" class="h-6">
                </a>
                <a href="https://twitter.com" target="_blank" class="mx-2">
                    <img src="path_to_twitter_icon.png" alt="Twitter" class="h-6">
                </a>
                <a href="https://instagram.com" target="_blank" class="mx-2">
                    <img src="path_to_instagram_icon.png" alt="Instagram" class="h-6">
                </a>
                <!-- Añade más iconos si es necesario -->
            </div>

            <div class="text-center">
                <p>© 2023 MiEmpresa. Todos los derechos reservados.</p>
                <div class="flex justify-center mt-2">
                    <a href="#" class="text-yellow-400 hover:text-yellow-300 mx-2">Política de privacidad</a> |
                    <a href="#" class="text-yellow-400 hover:text-yellow-300 mx-2">Términos de uso</a> |
                    <a href="#" class="text-yellow-400 hover:text-yellow-300 mx-2">Contacto</a>
                </div>
            </div>
        </div>
    </footer>


</div>
