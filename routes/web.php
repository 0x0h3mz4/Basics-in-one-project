<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //using array_map 
    // $posts= array_map(function(File::files(resource_path("posts"))){
    //     $document= YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->date,
    //         $document->body(),
    //         $document->slug);
    // },$files);
    
    //using collections 

    
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function (Post $post) {
    //Find a post by its id and pass it to a view called "post"
    return view('post', [
        'post' =>$post
    ]);
});

//above we can use constraints in odrder not to use like this link 'localhost/posts/fdsfè-"_é_çé' 
//there is much constraints like if you are working with ids we can use only 0-9 or whereNumber('post)...