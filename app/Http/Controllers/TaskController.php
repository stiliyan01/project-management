<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('project')->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $project_id = $request->query('project_id'); 
        
        if(!$project_id){
            $projects = Project::all();
            return view('tasks.create', ['projects' => $projects]);
        }

        $project = Project::findOrFail($project_id);

        return view('tasks.create', ['project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->validated());

        return redirect()->route('projects.show', $task->project_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $task = Task::with('project')->find($task->id);
        
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $projects = Project::all();

        $task = Task::with('project')->find($task->id);

        return view('tasks.edit', ['task' => $task, 'projects' => $projects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('projects.show', $task->project_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('projects.show', $task->project_id);
    }
}
