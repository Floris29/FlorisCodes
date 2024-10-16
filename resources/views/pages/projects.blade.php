@extends('components.layout')

@section('content')
    <div class="uppercase text-subtitle p-4 text-5xl font-antonio font-bold flex justify-between items-center">
        <a href="/projects/create">Create a new project</a>
        <a href="/">Back to the home page</a>
    </div>


    <div>
        @foreach ($projects as $index => $project)
            <div
                class="flex {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center justify-center group gap-72">
                <div>
                    <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->name }}">
                </div>
                <div class="w-96">
                    <h1 class="uppercase text-6xl font-antonio font-bold text-title">{{ $project->name }}</h1>
                    <p class="text-xl font-antonio text-text">{{ $project->description }}</p>
                    {{-- <a href="{{ route('projects.edit', $project->id) }}"
                        class="text-xl text-center font-antonio text-subtitle border-2 uppercase font-bold p-2 hidden group-hover:inline-block">Edit
                        project</a> --}}

                </div>
            </div>
        @endforeach
    </div>
@endsection
