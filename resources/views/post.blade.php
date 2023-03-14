<x-layout>
    <a href="/">Go Back</a>
    <h1> {{$post->title}}</h1>
    <p> <a href="/category/{{$post->category->id}}"> {{$post->category->name}} </a></p>
    <div>
        {!!$post->body!!} 
    </div>
</x-layout>