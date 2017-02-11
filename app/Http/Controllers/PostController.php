<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index() {

        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show($post) {
        return view('posts.show');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){

        $this->validate(request(),[
            'title'=> 'required',
            'body' => 'required'
        ]);
    

       Post::create(request(['title','body']));

       return  redirect('/');

    }
}
