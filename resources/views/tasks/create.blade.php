@extends('layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Create New Task</h2>
            
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">Task Information</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                    
                        @isset($project)
                            <h3 class="mb-0">Project Name: {{ $project->name }}</h3>
                            <input type="hidden" name="project_id" value="{{ $project->id }}">
                        @endisset
                    
                        @isset($projects)
                            <div class="form-group mb-3">
                                <label for="project_id" class="mb-2">Project:</label>
                                <select class="form-control @error('project_id') is-invalid @enderror" name="project_id" id="project_id">
                                    <option disabled selected>Choose project</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}" {{ old('project_id') == $project->id ? 'selected' : '' }}>{{ $project->name }}</option>
                                    @endforeach
                                </select>
                                @error('project_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endisset
                    
                        <div class="mt-3 mb-3">
                            <label for="name" class="form-label">Task Name</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter task name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date" id="due_date" name="due_date" class="form-control @error('due_date') is-invalid @enderror" value="{{ old('due_date') }}" required>
                            @error('due_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Create Task</button>
                            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
