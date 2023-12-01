<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nueva categoría</h3>
      </x-slot>
      <x-slot name="content">
        <form>

        <div class="flex justify-between mx-2 mb-6">
          <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="nombre" class="font-bold"/>
            <x-input type="text" wire:model.defer="matery.nombre" class="w-full"/>
            <x-input-error for="matery.nombre"/>
          </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="creditos" class="font-bold"/>
              <x-input type="text" wire:model.defer="matery.creditos" class="w-full"/>
              <x-input-error for="matery.creditos"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="tipo" class="font-bold"/>
              <x-input type="text" wire:model.defer="matery.tipo" class="w-full"/>
              <x-input-error for="matery.tipo"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="etapa" class="font-bold"/>
              <x-input type="text" wire:model.defer="matery.etapa" class="w-full"/>
              <x-input-error for="matery.etapa"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="semestre" class="font-bold"/>
              <x-input type="text" wire:model.defer="matery.semestre" class="w-full"/>
              <x-input-error for="matery.semestre"/>
            </div>
          </div>

          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Noseee" class="font-bold" />

                <select wire:model="matery.history_id" class="w-full">
                    <option value="">Selecciona un usuario</option>
                    @foreach($histories as $history)
                        <option value="{{ $history->id }}">{{ $history->claveMateria }}</option>
                    @endforeach
                </select>

                <x-input-error for="matery.history_id" />
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
