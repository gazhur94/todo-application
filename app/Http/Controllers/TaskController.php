<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('index')->with(['tasks' => $tasks]);
    }

    public function addTask()
    {
        //dd($_POST['task']);
        $task = $_POST['task'];
        Task::insert(['task' => $task, 'created_at' => now(), 'updated_at' => now()]);
        return redirect('/');
    }

    public function deleteTask($id)
    {
        Task::where('id',$id)->delete();
        return redirect('/');
    }
}
