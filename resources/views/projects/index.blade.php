@extends('layout')
@section('content')

<header class="bg-success text-white text-center py-5">
    <div class="container">
        <h1>Manage Your Projects</h1>
        <p class="lead">Keep track of all your projects and tasks in one place</p>
        <a href="{{ route('projects.create') }}" class="btn btn-light btn-lg">Add New Project</a>
    </div>
</header>

<div class="container my-5">
    <h2 class="text-center mb-4">Projects</h2>
    <div class="row g-4">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title">{{$project->name}}</h5>
                        
                        <a href="{{ route('projects.show', [$project->id]) }}" class="btn btn-success">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
