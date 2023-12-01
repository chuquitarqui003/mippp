<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Nuevo plan </h3>
      </x-slot>
      <x-slot name="content">
        <form>

        <div class="flex justify-between mx-2 mb-6">
          <div class="mb-2 md:mr-2 md:mb-0 w-full">
            <x-label value="fecha inicio" class="font-bold"/>
            <x-input type="text" wire:model.defer="plan.plan_f_inicio_plan" class="w-full"/>
            <x-input-error for="plan.plan_f_inicio_plan"/>
          </div>
        </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="fecha fin" class="font-bold"/>
              <x-input type="text" wire:model.defer="plan.plan_f_fin_plan" class="w-full"/>
              <x-input-error for="plan.plan_f_fin_plan"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="horas planificadas" class="font-bold"/>
              <x-input type="text" wire:model.defer="plan.plan_horas_planificadas" class="w-full"/>
              <x-input-error for="plan.plan_horas_planificadas"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="semanas planificadas" class="font-bold"/>
              <x-input type="text" wire:model.defer="plan.plan_semanas_planificadas" class="w-full"/>
              <x-input-error for="plan.plan_semanas_planificadas"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="fecha modalidad" class="font-bold"/>
              <x-input type="text" wire:model.defer="plan.plan_modalidad" class="w-full"/>
              <x-input-error for="plan.plan_modalidad"/>
            </div>
          </div>
          <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="turnos" class="font-bold"/>
              <x-input type="text" wire:model.defer="plan.plan_turnos" class="w-full"/>
              <x-input-error for="plan.plan_turnos"/>
            </div>
          </div>

        </form>
      </x-slot>
      <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-jet-secondary-button>
        <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Crear
        </x-button>
      </x-slot>

    </x-dialog-modal>
</div>
