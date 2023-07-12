@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <div class="d-flex align-items-center gap-3">
            <img class="col-1" src="{{ $project->image }}" alt="{{ $project->title }}" />
            <h1>{{ $project->name }}</h1>
        </div>
        <p>{{ $project->description }}</p>
        <div>
            <a href="{{ route("admin.projects.edit", $project) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route("admin.projects.destroy", $project) }}" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>

@endsection