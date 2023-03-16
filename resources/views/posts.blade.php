<x-layout>
    @foreach ($posts as $post)
    {{-- @dd($loop) --}}
        <article>
            <h1><a href="/posts/{{$post->slug}}"> {{$post->title}}</a></h1>
            <p> By <a href="/users/{{$post->user->slug}}"> {{$post->user->name}}</a> </p>
            <p> <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}} </a></p>
            <div>
                {!!$post->excerpt!!}
            </div>
        </article>
    @endforeach
</x-layout>

