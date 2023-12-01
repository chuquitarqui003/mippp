<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nueva categoría</h3>
      </x-slot>
      <x-slot name="content">
        <form>

            <div class="flex justify-between mx-2 mb-6">
                <div class="mb-2 md:mr-2 md:mb-0 w-full">
                  <x-label value="industria_nombre" class="font-bold"/>
                  <x-input type="text" wire:model.defer="industry.industria_nombre" class="w-full"/>
                  <x-input-error for="industry.industria_nombre"/>
                </div>
              </div>

              <div class="flex justify-between mx-2 mb-6">
                <div class="mb-2 md:mr-2 md:mb-0 w-full">
                  <x-label value="industria_ruc" class="font-bold"/>
                  <x-input type="text" wire:model.defer="industry.industria_ruc" class="w-full"/>
                  <x-input-error for="industry.industria_ruc"/>
                </div>
              </div>

              <div class="flex justify-between mx-2 mb-6">
                <div class="mb-2 md:mr-2 md:mb-0 w-full">
                  <x-label value="industria_direccion" class="font-bold"/>
                  <x-input type="text" wire:model.defer="industry.industria_direccion" class="w-full"/>
                  <x-input-error for="industry.industria_direccion"/>
                </div>
              </div>

              <div class="flex justify-between mx-2 mb-6">
                <div class="mb-2 md:mr-2 md:mb-0 w-full">
                  <x-label value="industria_telefono" class="font-bold"/>
                  <x-input type="text" wire:model.defer="industry.industria_telefono" class="w-full"/>
                  <x-input-error for="industry.industria_telefono"/>
                </div>
              </div>

              <div class="flex justify-between mx-2 mb-6">
                <div class="mb-2 md:mr-2 md:mb-0 w-full">
                  <x-label value="industria_correo" class="font-bold"/>
                  <x-input type="text" wire:model.defer="industry.industria_correo" class="w-full"/>
                  <x-input-error for="industry.industria_correo"/>
                </div>
              </div>


          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Estudiante:" class="font-bold" />

                <select wire:model="industry.student_id" class="w-full">
                    <option>    </option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->estudiante_nombre }}</option>
                    @endforeach
                </select>

                <x-input-error for="industry.student_id" />
            </div>
        </div>



        </form>
      </x-slot>
      <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-jet-secondary-button>
        <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Registrar
        </x-button>
      </x-slot>

    </x-dialog-modal>
</div>
