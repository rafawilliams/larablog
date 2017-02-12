<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    


    function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index() {

        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {

        return view('posts.show', compact('post'));

    }

    public function create(){

        return view('posts.create');

    }

    public function store(){

        $this->validate(request(),[
            'title'=> 'required',
            'body' => 'required'
        ]);
    

       Post::create([
           'title' => request('title'),
           'body' => request('body'),
           'user_id' => auth()->id()
           ]);

       return  redirect('/');

    }
}
