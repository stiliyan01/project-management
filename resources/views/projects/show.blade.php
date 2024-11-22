@extends('layout')

@section('content')

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Project: {{ $project->name }}</h1>
      
        <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">Back to Projects</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">Project Details</h5>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $project->name }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h3 class="text-center mb-3">Related Tasks</h3>
        <div class="row g-4">
            @foreach ($project->tasks as $task)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Task: {{ $task->name}}</h5>
                            <p><strong>Due Date:</strong> {{ $task->due_date}}</p>
                            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn btn-success btn-sm">View Task</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
