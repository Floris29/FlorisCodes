@extends('components.layout')

@section('content')
    <div class="uppercase text-subtitle font-antonio font-bold flex justify-between items-center">
        <a href="/projects/create" class="p-4 text-5xl">Create a new project</a>
    </div>


    <div class="">
        @foreach ($projects as $index => $project)
            <div class="flex {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center justify-center group">
                <div>
                    <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->name }}">
                </div>
                <div>
                    <h1 class="uppercase text-4xl font-antonio font-bold text-title">{{ $project->name }}</h1>
                    <p class="font-antonio text-text">{{ $project->description }}</p>
                    <a href="{{ route('projects.edit', $project->id) }}" class="font-antonio text-text hidden group-hover:block">Edit project</a>

                </div>
            </div>
        @endforeach
    </div>
@endsection
