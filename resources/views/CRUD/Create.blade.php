@extends('components.layout')

@section('content')
    <h1>Create a new project</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Project name</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Project description</label>
        <textarea name="description" id="description" required></textarea>

        <label for="image">Project image</label>
        <input type="file" name="image" id="image" required>

        <button type="submit">Create project</button>

    </form>
@endsection
