@extends('components.layout')

@section('content')
    <header>
        <nav x-data="{ open: false }"
            class="uppercase text-text font-antonio font-bold drop-shadow-xl flex justify-between items-center fixed">
            <div class="mr-14 md:hidden sm:hidden xs:hidden">
                <a href="/" class="p-4 text-sm-5xl drop-shadow-xl">Homepage</a>
            </div>

            <div class="flex 2xl:hidden xl:hidden lg:hidden">
                <div class="-me-2 flex items-center mr-6">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div :class="{ 'translate-x-0': open, '-translate-x-full': !open }"
                    class="fixed top-0 left-0 h-full w-64 bg-gray-800  p-5 transition-transform duration-300 transform 2xl:hidden xl:hidden lg:hidden">
                    <div class="flex justify-end">
                        <button @click="open = false" class=" text-xl">
                        </button>
                    </div>

                    <div class="mt-8 space-y-4">
                        <x-responsive-nav-link href="#me" class="text-text text-xl">
                            Homepage
                        </x-responsive-nav-link>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
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
@endsection
