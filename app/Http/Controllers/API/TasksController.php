<?php

namespace App\Http\Controllers\API;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index()
    {
        $todos = Task::all();
        return response()->json($todos);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'boolean'
        ]);
        // dd($request->all());

        $todo = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => $request->is_completed ?? false
        ]);

        return response()->json([
            'message' => 'Task created successfully',
            'task' => $todo
        ], 201);
    }
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return response()->json($task, 200);
    }

    


    

            
            

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $request->validate([
            'title' => 'string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'boolean'
        ]);

        // $task->update($request->all());
        $task->title = $request->title;
        $task->description = $request->description;
        $task->is_completed = $request->is_completed ?? false;
        $task->save();

        return response()->json($task);
    }
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
