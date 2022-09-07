<?php

namespace App\Http\Controllers;

use App\Models\Post;
//use Illuminate\Http\Request;

 
class PostController extends Controller
{


   
    public function index() {

        $posts = Post::latest();

        var_dump($posts);

        if(request('search')) {
                $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');

        }

        //var_dump($posts);

        //dd(request('search'));
        // dd();

        return view('posts', [
            "title"  => "All Posts",
            "active" => 'posts',
            "posts"  => $posts->get()
        ]);
    }

    public function show(Post $post) {

        
        return view('post' , [
            "title"  => "Single Post",
            "active" => 'posts',
            "post"   => $post
        ]);
    }
}
