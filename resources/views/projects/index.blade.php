@extends('layout')
@section('content')

<x-header 
    title="Manage Your Projects"
    subtitle="Keep track of all your projects and tasks in one place"
    route="projects.create"
    buttonText="Add New Project"
/>

<div class="container my-5">
    <div class="row g-4">
        @foreach ($projects as $project)
            <x-card 
                :title="$project->name"
                :route="route('projects.show', [$project->id])" 
            />
        @endforeach
    </div>
</div>
@endsection
