<x-layout>
    @foreach ($posts as $post)
    {{-- @dd($loop) --}}
        <article>
            <h1><a href="/posts/{{$post->slug}}"> {{$post->title}}</a></h1>
            <p> <a href="/category/{{$post->category->id}}"> {{$post->category->name}} </a></p>
            <div>
                {!!$post->body!!}
            </div>
        </article>
    @endforeach
</x-layout>

