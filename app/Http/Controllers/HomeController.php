<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
    public function Read(/*Request $request*/)
    {
        /*$id = $request->input('id').'';
        $tasks = [
          "1" => "Some information for task1",
          "2" => "Some information for task2",
          "3" => "Some information for task3",
          "4" => "Some information for task4",
          "5" => "Some information for task5"
        ];
        $headers = [
            'Content-Type' => 'text/html'
        ] ;
        $status = 200;
        $content = $tasks[$id];
        $response = new Response($content, $status, $headers);
        return $response;*/

        $tasks = Task::all();
        return view('tasks.read', compact('tasks'));
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function assistant_create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1024',
        ]);
        Task::create($request->all());
        return redirect()->route('tasks.read')->with('success', 'Task created!');
    }
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    // Update an existing task
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1024',
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('tasks.read')->with('success', 'Task updated!');
    }

    // Delete an existing task
    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.read')->with('success', 'Task deleted!');
    }
}
