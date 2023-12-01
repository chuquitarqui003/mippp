<x-index-layout>
    <div>

        <div class="border-y-2 border-indigo-600 py-3 flex justify-between">
            <h3>{{$post->category->name}}</h3>
            <a href="/" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: #fff; text-decoration: none; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#2980b9'" onmouseout="this.style.backgroundColor='#3498db'">Regresar al Menú</a>

        </div>
        <div>
            <h1 class="text-2xl font-bold py-6">{{$post->name}}</h1>


        </div>
        <div class="grid grid-cols-3 gap-6 w-full">
            <div class="col-span-2">
                <div>
                    <img class="w-full" src="{{Storage::url($post->image->url)}}" alt="">
                </div>
                <div>
                    <p class="font-bold border-y-2 border-indigo-600 border-dotted py-3 my-4">Publicado el {{$post->created_at}}</p>
                    <p class="text-sm">{{$post->body}}</p>
                </div>
            </div>
            <div>
                <h3 class="bg-indigo-600 text-white p-2">Ultimas noticias</h3>
                @foreach ($ultimas as $item)
                <a href="{{route('posts.show',$item)}}" class="grid grid-cols-2 my-4 border-b-2 border-indigo-600 pb-4">
                    <div>
                        <img src="{{Storage::url($item->image->url)}}" alt="">
                    </div>
                    <div class="ml-4">
                        <h4>{{$item->name}}</h4>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

</x-index-layout>

