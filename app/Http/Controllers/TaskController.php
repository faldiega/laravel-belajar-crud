<?php

namespace App\Http\Controllers;
use App\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();
    	return view('tasks.index', compact('tasks'));
    }

    public function store(TaskRequest $request)
    {
    	Task::create($request->all());
    	return back()->with('status', 'Your task was created!');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task, TaskRequest $request)
    {     
        $task->update($request->all());

        return redirect("/tasks/{$task->id}")->with('status', 'Your task was updated!');
    }

    public function delete(Task $task)
    {
        $task->delete();
        return redirect('/tasks')->with('status', 'Your task was deleted.');
    }
}
