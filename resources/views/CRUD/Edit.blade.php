@extends('components.layout')

@section('content')
    <h1>Edit this prokect</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Project name</label>
        <input type="text" name="name" id="name" placeholder="Project name" value="{{$project->name}}" required>

        <label for="description">Project description</label>
        <textarea name="description" id="description" placeholder="Project description" value="{{$project->description}}" required></textarea>

        <label for="image">Project image</label>
        <input type="file" name="image" id="image" placeholder="Project image" value="{{$project->iamge_path}}" required>

        <button type="submit">Edit project</button>

    </form>

    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete project</button>

    <a href="{{ route('projects.index') }}">Back to projects</a>

@endsection
