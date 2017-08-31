<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //method call by the TaskController@index in the web routes file
    public function index() {

    	$tasks = Task::all();
		return view('tasks.index', compact('tasks') );
    
    }

    public function show(Task $task) {
    	//Controller then pass this data to the view. The controller delegates a task.
		return view('tasks.show', compact('task') );
    }

}
