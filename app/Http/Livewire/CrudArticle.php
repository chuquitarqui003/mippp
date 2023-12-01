<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Supplier;
use Livewire\Component;

class CrudArticle extends Component
{
    public $isOpen=false;
    public $search,$article;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'article.descripcion'=>'required',
        'article.marca'=>'required',
        'article.modelo'=>'required',
        'article.cantidad'=>'required',
        'article.fechaCompra'=>'required',
        'article.importe'=>'required',
        'article.supplier_id'=>'required',
    ];
    public function render()
    {
        $suppliers = Supplier::all();

        $articles=Article::where('descripcion', 'LIKE', '%' . $this->search . '%')->paginate();
        return view('livewire.crud-article', compact('articles','suppliers'));
    }
    public function create()
    {
        $this->isOpen = true;
    }
    public function store()
    {
        $this->validate();
        //dd($this->category);

        if(!isset($this->article['id'])){
            Article::create($this->article);
        }else{
            $article=Article::find($this->article['id']);

            $article->descripcion=$this->article['descripcion'];
            $article->marca=$this->article['marca'];
            $article->modelo=$this->article['modelo'];
            $article->cantidad=$this->article['cantidad'];
            $article->fechaCompra=$this->article['fechaCompra'];
            $article->importe=$this->article['importe'];
            $article->supplier_id=$this->article['supplier_id'];


            $article->save();
        }
        $this->reset(['isOpen','article']);
        $this->emitTo('CrudArticle','render');
        $this->emit('alert','Registro creado satisfactoriamente');


    }
    public function edit($article){
        $this->isOpen=true;
        $this->article=$article;

    }
    public function delete($id){
        Article::find($id)->delete();
    }
}
