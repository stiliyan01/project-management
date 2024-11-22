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

                            <div class="form-group mb-3">
                                <label class='mb-2' for="project_id">Project:</label>

                                <select class="form-control @error('project_id') is-invalid @enderror" name="project_id"
                                        id="project_id">
                                    <option disabled selected>Choose project</option>

                                    @foreach($projects as $project)
                                        <option
                                            value="{{ $project->id }}" {{ $project->id == old('project_id', $task->project_id) ? 'selected' : '' }}>
                                            {{ $project->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('project_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Task Name</label>
                                <input type="text" id="name" name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name', $task->name) }}" required>

                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="due_date" class="form-label">Due Date</label>
                                <input type="date" id="due_date" name="due_date"
                                       class="form-control @error('due_date') is-invalid @enderror"
                                       value="{{ old('due_date', $task->due_date) }}" required>

                                @error('due_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update Task</button>
                                <a href="{{ route('projects.show', ['project' => $task->project]) }}"
                                   class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
