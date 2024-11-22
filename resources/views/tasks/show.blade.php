@extends('layout')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h1>Task Details</h1>
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ $task->name }}</h2>
                <p><strong>Due Date:</strong> {{ $task->due_date }}</p>
                <p><strong>Project:</strong> {{ $task->project->name }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Edit Task</a>

                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete Task</button>
                </form>

                <a href="{{ route('projects.show', $task->project) }}" class="btn btn-secondary">Go to project</a>
            </div>
        </div>
    </div>
@endsection
