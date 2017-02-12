<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //

    function __construct(){
        $this->middleware('guest',['except'=>'destroy']);
    }


    public function create(){
        return view('sessions.create');
    }



    public function store(){

        if(! auth()->attempt(request(['email', 'password']))){
            return back()->withErros([
                'message' => 'please check your credentials'
            ]);
        }

        return redirect()->home();

    }

    public function destroy(){

        auth()->logout();

       return  redirect()->home();
    }
}
