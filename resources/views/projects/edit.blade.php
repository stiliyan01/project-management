@extends('layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Update Project</h2>
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">Project Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('projects.update', ['project' => $project]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Project Name</label>
                            <input type="text" id="name" name="name" class="form-control" value='{{ $project->name }}' required>
                        </div>
                       
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Update Project</button>
                            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
