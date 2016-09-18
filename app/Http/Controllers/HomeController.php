<?php

namespace App\Http\Controllers;

use DB;

use App\Task;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function showTasks()
    {
      $tasks = Task::all();
      return view('landing', compact('tasks')); // looks for:  resources/views/landing.blade.php
    }

    public function storeTask(Request $request)
    {
      $task = new Task;
      $task->content = $request->content;
      $task->story_points = $request->story_points;
      $task->business_value = $request->business_value;
      $task->is_completed = false;
      $task->save();

      $tasks = Task::all();
      return view('landing', compact('tasks'));
    }
}
