<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    
    public function index(){
      
        
        return view('posts', [
            'posts' =>  $this->getPost(),
            'categories'=> Category::all()
        ]);
    }
    public function show(Post $post){
        return view('post', [
            'post' =>$post
        ]);
    }
    public function getPost(){
        $posts=Post::latest();
        if(request("search"))
        {
            $posts->where('title','like','%'.request("search").'%')
                  ->orWhere('body','like','%'.request("search").'%');
        }
        return $posts->get();
    }
}
