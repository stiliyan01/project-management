@extends('layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Update Task</h2>
            <div class="card">
                
                <div class="card-body">
                    <form action="{{ route('tasks.update', ['task' => $task]) }}" method="POST">
                        @method('PUT') 
                        @csrf

                        <div class="form-group">
                            <label class='mb-2' for="exampleFormControlSelect1">Project:</label>
                            <select class="form-control" name="project_id">
                                <option disabled selected>Choose project</option>
                                @foreach($projects as $project)
                                    <option value='{{ $project->id }}' {{ $project->id == $task->project_id ? 'selected' : '' }}>{{ $project->name }}</option>
                                @endforeach 
                            </select>
                        </div>

                        <div class="mt-3 mb-3">
                            <label for="name" class="form-label">Task Name</label>
                            <input type="text" id="name" name="name" class="form-control" value='{{ $task->name }}' required>
                        </div>

                        <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date" id="due_date" name="due_date" class="form-control" value='{{ $task->due_date }}' required>
                        </div>
                       
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Update Task</button>
                            <a href="{{ route('projects.show', ['project' => $task->project]) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
