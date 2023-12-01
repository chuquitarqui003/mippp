<?php

namespace App\Http\Livewire;

use App\Models\Industry;
use App\Models\Student;
use Livewire\Component;

class CrudIndustry extends Component
{
    public $isOpen=false;
    public $search,$industry;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'industry.industria_nombre'=>'required',
        'industry.industria_ruc'=>'required',
        'industry.industria_direccion'=>'required',
        'industry.industria_telefono'=>'required',
        'industry.industria_correo'=>'required',
    ];


    public function render()
    {
        $students = Student::all();
        $industries=Industry::where('industria_nombre','LIKE','%'.$this->search.'%')->paginate();
        return view('livewire.crud-industry', compact('industries','students'));
    }

    public function create(){
        $this->isOpen=true;
    }

    public function store()
    {
        $this->validate();

        if(!isset($this->industry['id'])){
            Industry::create($this->industry);
        }else{
            $industry=Industry::find($this->industry['id']);

            $industry->industria_nombre=$this->industry['industria_nombre'];
            $industry->industria_ruc=$this->industry['industria_ruc'];
            $industry->industria_direccion=$this->industry['industria_direccion'];
            $industry->industria_telefono=$this->industry['industria_telefono'];
            $industry->industria_correo=$this->industry['industria_correo'];
            $industry->student_id=$this->industry['student_id'];


            $industry->save();
        }
        $this->reset(['isOpen','industry']);
        $this->emitTo('CrudIndustry','render');
        $this->emit('alert','Registro creado satisfactoriamente');


    }

    public function edit($industry){
        $this->isOpen=true;
        $this->industry=$industry;

    }
    public function delete($id){
        Industry::find($id)->delete();
    }




}
