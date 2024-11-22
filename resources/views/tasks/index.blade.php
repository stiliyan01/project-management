@extends('layout')
@section('content')

<x-header 
    title="All Tasks"
    subtitle=""
    route="tasks.create"
    buttonText="Create New Task"
/>

<div class="container my-5">
    <div class="row g-4">
        @foreach($tasks as $task)
            <x-card 
                :title="$task->name"
                :subTitle="$task->project->name"
                :route="route('tasks.show', ['task' => $task])" 
            />
        @endforeach
    </div>
</div>

@endsection
