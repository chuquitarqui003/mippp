<?php

namespace App\Http\Livewire;

use App\Models\Presentation;
use Livewire\Component;

class CrudPresentation extends Component
{
    public $isOpen=false;

    public function render()
    {
        $presentations=Presentation::paginate();
        return view('livewire.crud-presentation', compact('presentations'));;
    }
}

