<?php

namespace App\Http\Livewire;

use App\Models\History;
use App\Models\Matery;
use Livewire\Component;

class CrudMatery extends Component
{
    public $isOpen=false;
    public $search,$matery;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'matery.nombre'=>'required',
        'matery.creditos'=>'required',
        'matery.tipo'=>'required',
        'matery.etapa'=>'required',
        'matery.semestre'=>'required',
    ];
    public function render()
    {
        $histories = History::all();
        $materies=Matery::where('nombre','LIKE','%'.$this->search.'%')->paginate();
        return view('livewire.crud-matery',compact('materies','histories'));
    }
    public function create(){
        $this->isOpen=true;
    }

    public function store()
    {
        $this->validate();
        //dd($this->category);

        if(!isset($this->matery['id'])){
            Matery::create($this->matery);
        }else{
            $matery=Matery::find($this->matery['id']);

            $matery->nombre=$this->matery['nombre'];
            $matery->creditos=$this->matery['creditos'];
            $matery->tipo=$this->matery['tipo'];
            $matery->etapa=$this->matery['etapa'];
            $matery->semestre=$this->matery['semestre'];
            $matery->history_id=$this->matery['history_id'];


            $matery->save();
        }
        $this->reset(['isOpen','matery']);
        $this->emitTo('CrudMatery','render');
        $this->emit('alert','Registro creado satisfactoriamente');


    }
    public function edit($matery){
        $this->isOpen=true;
        $this->matery=$matery;

    }
    public function delete($id){
        Matery::find($id)->delete();
    }


}
