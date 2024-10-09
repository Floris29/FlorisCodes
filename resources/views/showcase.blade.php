@extends('components.layout')

@section('content')
    @foreach ($projects as $project)
        <section class="h-full" style="height:100vh">
            <div>
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
            </div>
            <div class="flex items-center justify-center h-full">
                <h1 class="uppercase text-6xl font-antonio font-bold text-title">{{ $project->title }}</h1>
                <p class="font-antonio text-text">{{ $project->description }}</p>
            </div>
    @endforeach
@endsection
