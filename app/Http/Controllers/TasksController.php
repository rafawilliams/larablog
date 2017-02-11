<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //

    public function index() {

        $tasks = Task::all();

        return view('task.index', compact('tasks') );
    }

    public function show(Task $task){


        return view('task.show',compact('task'));
    }
}
