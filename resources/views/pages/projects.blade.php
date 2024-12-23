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
                    group gap-8 lg:gap-8 md:gap-7 sm:block xs:block p-5 bg-primary-bg w-2/3 mx-auto">

                    <div>
                        <img src="{{ asset('storage/public/' . $project->image_path) }}" alt="{{ $project->name }}"
                            class="w-2/3 sm:w-3/5 h-auto m-auto xl:mx-auto lg:mx-auto md:mx-auto sm:mx-auto xs:mx-auto">
                    </div>

                    <div class="w-3/4 xs:text-center sm:text-center xs:block sm:block sm:mx-auto xs:mx-auto">
                        <h1
                            class="uppercase text-6xl font-antonio font-bold text-icon xl:text-lg-6xl lg:text-lg-4xl md:text-md-4xl sm:text-md-5xl">
                            {{ $project->name }}</h1>

                        <div class="flex md:justify-center sm:justify-center xs:justify-center">
                            @foreach ($project->skills_used as $skill)
                                <div
                                    class="px-6 py-3 mb-3 mr-5 text-lg bg-icon font-antonio font-bold text-text lg:px-4 lg:py-2 md:py-2 sm:px-4 sm:py-2 xs:px-4 xs:py-2">
                                    <p>{{ $skill }}</p>
                                </div>
                            @endforeach
                        </div>

                        <p class="text-xl md:text-lg sm:text-md font-antonio xs:text-md text-text lg:text-lg">
                            {{ $project->description }}</p>

                        <div class="flex mt-3 md:justify-between sm:justify-between xs:justify-between">
                            <a href="{{ $project->url }}" target="_blank"
                                class="px-6 py-3 mr-5 text-lg bg-icon font-antonio font-bold text-text uppercase lg:px-4 lg:py-2 md:py-2 sm:px-4 sm:py-2 xs:px-4 xs:py-2">Visit
                                Site</a>
                            <a href="{{ $project->github }}" target="_blank"
                                class="px-6 py-3 mr-5 text-lg bg-icon font-antonio font-bold text-text uppercase lg:px-4 lg:py-2 md:py-2 sm:px-4 sm:py-2 xs:px-4 xs:py-2">View
                                Code</a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
