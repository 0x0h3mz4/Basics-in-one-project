<x-layout>
    @foreach ($posts as $post)
    {{-- @dd($loop) --}}
        <article>
            <h1><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h1>
            <div>
                {!!$post->body!!}
            </div>
        </article>
    @endforeach
</x-layout>

