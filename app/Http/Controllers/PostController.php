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

        $posts = Post::latest()->filter(request(['month','year']))->get();


        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                         ->groupBy('year','month')
                         ->orderByRaw('min(created_at) desc')
                         ->get()->toArray();

        return view('posts.index', compact('posts','archives'));
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
