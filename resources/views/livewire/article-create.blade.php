<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nueva categoría</h3>
      </x-slot>
      <x-slot name="content">
        <form>

        <div class="flex justify-between mx-2 mb-6">
          <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="Descripcion" class="font-bold"/>
            <x-input type="text" wire:model.defer="article.descripcion" class="w-full"/>
            <x-input-error for="article.descripcion"/>
          </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Marca" class="font-bold"/>
              <x-input type="text" wire:model.defer="article.marca" class="w-full"/>
              <x-input-error for="article.marca"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Modelo" class="font-bold"/>
              <x-input type="text" wire:model.defer="article.modelo" class="w-full"/>
              <x-input-error for="article.modelo"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Cantidad" class="font-bold"/>
              <x-input type="text" wire:model.defer="article.cantidad" class="w-full"/>
              <x-input-error for="article.cantidad"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Fecha Compra" class="font-bold"/>
              <x-input type="text" wire:model.defer="article.fechaCompra" class="w-full"/>
              <x-input-error for="article.fechaCompra"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Importe" class="font-bold"/>
              <x-input type="text" wire:model.defer="article.importe" class="w-full"/>
              <x-input-error for="article.importe"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Categoría del Post" class="font-bold" />

                <select wire:model="supplier.supplier_id" class="w-full">
                    <option value="">Selecciona</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->nombre }}</option>
                    @endforeach
                </select>
                <x-input-error for="supplier.supplier_id" />
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
