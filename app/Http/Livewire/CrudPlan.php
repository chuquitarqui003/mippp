<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Livewire\Component;

class CrudPlan extends Component
{
    public $isOpen=false;
    public $search,$plan;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'plan.plan_f_inicio_plan'=>'required',
        'plan.plan_f_fin_plan'=>'required',
        'plan.plan_horas_planificadas'=>'required',
        'plan.plan_semanas_planificadas'=>'required',
        'plan.plan_modalidad'=>'required',
        'plan.plan_turnos'=>'required',

    ];
    public function render()
    {
        $plans=Plan::paginate();
        return view('livewire.crud-plan', compact('plans'));;
    }

    public function create(){
        $this->isOpen=true;
    }

    public function store()
    {
        $this->validate();
        //dd($this->category);

        if(!isset($this->plan['id'])){
            Plan::create($this->plan);
        }else{
            $plan=Plan::find($this->plan['id']);

            $plan->plan_f_inicio_plan=$this->plan['plan_f_inicio_plan'];
            $plan->plan_f_fin_plan=$this->plan['plan_f_fin_plan'];
            $plan->plan_horas_planificadas=$this->plan['plan_horas_planificadas'];
            $plan->plan_semanas_planificadas=$this->plan['plan_semanas_planificadas'];
            $plan->plan_modalidad=$this->plan['plan_modalidad'];
            $plan->plan_turnos=$this->plan['plan_turnos'];


            $plan->save();
        }
        $this->reset(['isOpen','plan']);
        $this->emitTo('CrudPlan','render');
        $this->emit('alert','Registro creado satisfactoriamente');


    }

    public function edit($plan){
        $this->isOpen=true;
        $this->plan=$plan;

    }
    public function delete($id){
        Plan::find($id)->delete();
    }
}

