<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
    @foreach ($posts as $post)
        <a href="{{ route('posts.show', $post) }}" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div class="grid grid-cols-2">
                <div class="  flex items-center justify-center ">
                    <img src="{{Storage::url($post->image->url)}}">
                </div>
                <div>
                <h2 class="mt-6 text-xl font-semibold text-gray-900">{{$post->name}}</h2>
                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    {{$post->extract}}
                </p>
                </div>
            </div>
        </a>
    @endforeach

</div>
<div class="mt-4">
    {{$posts->links()}}
</div>
