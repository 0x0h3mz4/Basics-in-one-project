<x-layout>
    <a href="/">Go Back</a>
    <h1> {{$post->title}}</h1>
    <div>
        {!!$post->body!!} 
    </div>
</x-layout>