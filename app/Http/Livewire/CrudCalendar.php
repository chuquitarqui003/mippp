<?php

namespace App\Http\Livewire;

use App\Models\Calendar;
use Livewire\Component;

class CrudCalendar extends Component
{
    public $IsOpen=false;
    public $events = [];

    public function mount()
    {
        $this->events = Calendar::all()->toArray();
    }


    public function getevent()
    {
        $events = Calendar::select('id', 'title', 'start')->get();
        return response()->json($events);
    }
    public function addEvent($event)
    {
        $input['title'] = $event['title'];
        $input['start'] = $event['start'];
        Calendar::create($input);


        $this->events = Calendar::all();
    }
    public function render()
    {
        $calendars=Calendar::paginate();

        return view('livewire.crud-calendar', compact('calendars'));;
    }
}
