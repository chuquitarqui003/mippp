<?php

namespace App\Http\Livewire;

use App\Models\Aceptation;
use Livewire\Component;

class CrudAceptation extends Component
{
    public $isOpen=false;

    public function render()
    {

        $aceptations=Aceptation::paginate();
        return view('livewire.crud-aceptation', compact('aceptations'));;
    }
}
