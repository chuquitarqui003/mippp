<div>
    <x-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Nuevo plan</h3>
        </x-slot>

        <x-slot name="content">
            <form>
                <!-- Campo de Fecha Inicio -->
                <div class="mb-6">
                    <x-label for="plan_f_inicio_plan" value="Fecha inicio" class="font-bold"/>
                    <x-input id="plan_f_inicio_plan" type="date" wire:model.defer="plan.plan_f_inicio_plan" class="w-full"/>
                    <x-input-error for="plan.plan_f_inicio_plan"/>
                </div>

                <!-- Campo de Fecha Fin -->
                <div class="mb-6">
                    <x-label for="plan_f_fin_plan" value="Fecha fin" class="font-bold"/>
                    <x-input id="plan_f_fin_plan" type="date" wire:model.defer="plan.plan_f_fin_plan" class="w-full"/>
                    <x-input-error for="plan.plan_f_fin_plan"/>
                </div>

                <!-- Campo de Horas Planificadas -->
                <div class="mb-6">
                    <x-label for="plan_horas_planificadas" value="Horas planificadas" class="font-bold"/>
                    <x-input id="plan_horas_planificadas" type="number" wire:model.defer="plan.plan_horas_planificadas" class="w-full"/>
                    <x-input-error for="plan.plan_horas_planificadas"/>
                </div>

                <!-- Campo de Semanas Planificadas -->
                <div class="mb-6">
                    <x-label for="plan_semanas_planificadas" value="Semanas planificadas" class="font-bold"/>
                    <x-input id="plan_semanas_planificadas" type="number" wire:model.defer="plan.plan_semanas_planificadas" class="w-full"/>
                    <x-input-error for="plan.plan_semanas_planificadas"/>
                </div>

                <!-- Campo de Modalidad -->
                <div class="mb-6">
                    <x-label for="plan_modalidad" value="Modalidad" class="font-bold"/>
                    <select id="plan_modalidad" wire:model.defer="plan.plan_modalidad" class="w-full border-gray-300 rounded-md shadow-sm">
                        <option value="PRESENCIAL">Selecciona una moduladad</option>
                        <option value="PRESENCIAL">PRESENCIAL</option>
                        <option value="VIRTUAL">VIRTUAL</option>
                    </select>
                    <x-input-error for="plan.plan_modalidad"/>
                </div>

                <!-- Campo de Turnos -->
                <div class="mb-6">
                    <x-label for="plan_turnos" value="Turnos" class="font-bold"/>
                    <select id="plan_turnos" wire:model.defer="plan.plan_turnos" class="w-full border-gray-300 rounded-md shadow-sm">
                        <option value="PRESENCIAL">Selecciona un turno</option>
                        <option value="MAÑANA">MAÑANA</option>
                        <option value="TARDE">TARDE</option>
                        <option value="NOCHE">NOCHE</option>
                    </select>
                    <x-input-error for="plan.plan_turnos"/>
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('isOpen', false)" class="mx-2">
                Cancelar
            </x-secondary-button>
            <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
                Crear
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
