<?php

use App\Models\Category;
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

Route::get('posts/{post:slug}', function (Post $post) {
    //Find a post by its slug
    return view('post', [
        'post' =>$post
    ]);
});

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});