<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostLivewire extends Component{

    //use WithPagination;

    public function render(){
                return view('livewire.article-livewire');

    }




    /*
    public function show(Post $post){
        //cantidad de noticias mostradas take(5)
        $ultimas=Post::where('category_id' , $post->category->id)->take(5)latest('id')->get();
        return view('livewire.post-show',compact('post','ultimas'));
    }*/

    /*
    public function show(Post $post){
        // Selecciona 5 noticias diferentes según algún criterio
        $ultimas = Post::where('category_id', '!=', $post->category_id)
                      ->inRandomOrder()
                      ->take(5)
                      ->get();

        return view('livewire.post-show', compact('post', 'ultimas'));
    }
*/
}
