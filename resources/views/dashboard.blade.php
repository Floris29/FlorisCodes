<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" sm:rounded-lg">
                <div class="p-6 font-antonio text-text">
                    <div>
                        @foreach ($projects as $project)
                            <div
                                class="flex {{ $loop->index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center justify-center group gap-72">
                                <div>
                                    <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->name }}">
                                </div>
                                <div class="w-96">
                                    <h1 class="uppercase text-6xl font-antonio font-bold text-title">{{ $project->name }}</h1>
                                    <p class="text-xl font-antonio text-text">{{ $project->description }}</p>
                                    <a href="{{ route('projects.edit', $project->id) }}"
                                        class="text-xl text-center font-antonio text-subtitle border-4 p-2 hidden group-hover:inline-block">Edit
                                        project</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
