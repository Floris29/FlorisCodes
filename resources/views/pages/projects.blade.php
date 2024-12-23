@extends('components.layout')

@section('content')
    <header>
        <nav class="text-center">
            <a href="/" class="uppercase text-text font-antonio font-bold text-sm-5xl">Homepage</a>
        </nav>
    </header>

    <section class="mt-5">
        <div>
            @foreach ($projects as $project)
                <div
                    class="flex {{ $loop->index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center justify-center 
                group gap-8 lg:gap-8 md:gap-7 sm:block xs:block p-5 bg-primary-bg w-2/3 m-auto">
                    <div>
                        <img src="{{ asset('storage/public/' . $project->image_path) }}" alt="{{ $project->name }}"
                            class="w-2/3 h-auto m-auto">
                    </div>
                    <div class="w-3/4 xs:text-center sm:text-center xs:block sm:block sm:mx-auto xs:mx-auto">
                        <h1 class="uppercase text-6xl font-antonio font-bold text-icon">{{ $project->name }}</h1>
                        <div class="flex">
                            @foreach ($project->skills_used as $skill)
                                <div
                                    class="px-6 py-3 mb-3 mr-5 text-lg bg-icon 
                    font-antonio font-bold text-text">
                                    <p>{{ $skill }}</p>
                                </div>
                            @endforeach
                        </div>
                        <p class="text-xl md:text-lg sm:text-sm font-antonio xs:text-sm text-text">
                            {{ $project->description }}</p>

                        <div class="flex mt-3">
                            <a href="{{ $project->url }}" target="_blank"
                                class="px-6 py-3 mr-5 text-lg bg-icon font-antonio font-bold text-text uppercase">Visit
                                Site</a>
                            <a href="{{ $project->github }}" target="_blank"
                                class="px-6 py-3 mr-5 text-lg bg-icon font-antonio font-bold text-text uppercase">View
                                Code</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
