@extends('layout')

@section('content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="display-4">All Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-success mt-3">Create New Task</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Task Name</th>
                <th>Project</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->project->name }}</td>
                <td>{{ $task->due_date }}</td>
                <td>
                    <a href="{{ route('tasks.show', ['task' => $task]) }}" class="btn btn-info btn-sm">View</a>
                    
                    <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn btn-primary btn-sm">Edit</a>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
