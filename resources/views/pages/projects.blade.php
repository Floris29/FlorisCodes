@extends('components.layout')

@section('content')
    <div class="text-7xl xs:text-md-6xl text-center text-title uppercase font-antonio font-bold leading-none">
        <a href="/">Back to the home page</a>
    </div>


    <div>
        @foreach ($projects as $project)
            <div
                class="flex {{ $loop->index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center justify-center 
                group gap-96 lg:gap-72 md:gap-48 sm:gap-28 xs:block border-b-2">
                <div>
                    <img src="{{ asset('storage/public' . $project->image_path) }}" alt="{{ $project->name }}">
                </div>
                <div class="w-96 xs:mx-auto xs:max-w-fit">
                    <h1 class="uppercase text-6xl font-antonio font-bold text-title">{{ $project->name }}</h1>
                    <p class="text-xl font-antonio text-text">{{ $project->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
