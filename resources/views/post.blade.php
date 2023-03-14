<x-layout>
    <a href="/">Go Back</a>
    <h1> {{$post->title}}</h1>
    <p> <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}} </a></p>
    <div>
        {!!$post->body!!} 
    </div>
</x-layout>