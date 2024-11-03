@extends('components.layout')

@section('content')
    <div class="text-6xl xs:text-md-6xl text-center text-title uppercase font-antonio font-bold leading-none">
        <a href="/">Back to the home page</a>
    </div>

    <div>
        @foreach ($projects as $project)
            <div
                class="flex {{ $loop->index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center justify-center 
                group gap-48 lg:gap-48 md:gap-32 border-b-2 sm:block xs:block ">
                <div>
                    <img src="{{ asset('storage/public/' . $project->image_path) }}" alt="{{ $project->name }}"
                        class="max-w-lg sm:max-w-xs xs:max-w-xs mx-auto">
                </div>
                <div class="w-96 xs:text-center sm:text-center xs:block sm:block sm:mx-auto xs:mx-auto">
                    <h1 class="uppercase text-6xl font-antonio font-bold text-title">{{ $project->name }}</h1>
                    <p class="text-xl md:text-lg sm:text-sm font-antonio xs:text-sm text-text">{{ $project->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
