@extends('layout')

@section('content')

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Project: {{ $project->name }}</h1>

        <div class="d-flex justify-content-center">
            <a href="{{ route('projects.edit', ['project' => $project]) }}" class="btn btn-primary mt-3">Edit Project</a>

            <form action='{{ route('projects.destroy', ['project' => $project]) }}' method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mt-3">Delete Project</button>
            </form>

            <a href="{{ route('tasks.create', ['project_id' => $project->id]) }}" class="btn btn-success mt-3">Create Task</a>

            <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">Back to Projects</a>
         </div>
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
            @forelse  ($project->tasks as $task)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Task: {{ $task->name}}</h5>
                            <p><strong>Due Date:</strong> {{ $task->due_date}}</p>
                            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn btn-success btn-sm">View Task</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="text-danger">No tasks found for this project</div>
            @endforelse
        </div>
    </div>
</div>

@endsection
