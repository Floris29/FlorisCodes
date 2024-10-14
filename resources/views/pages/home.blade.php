@extends('components.layout')

<x-header />

@section('content')
    <section class="h-full" style="height:100vh">
        <div class="flex items-center justify-center h-full">
            <h1 class="uppercase text-9xl font-antonio font-bold text-title">Hello World</h1>
        </div>
    </section>

    <section id="me">

        <div class="grid grid-cols-[40%_60%]">
            <div class="bg-primary-bg grid grid-cols-[115px_auto]">

                <div class="text-icon flex flex-col justify-around content-center flex-wrap">

                    <div class="hover:border-4 p-2">
                        <a href="https://www.linkedin.com/in/florismelchers/" target="_blank"><svg class="h-8 w-8"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                <rect x="2" y="9" width="4" height="12" />
                                <circle cx="4" cy="4" r="2" />
                            </svg></a>
                    </div>

                    <div class="hover:border-4 p-2">
                        <a href="https://github.com/floris29" target="_blank"><svg class="h-8 w-8 text-pink-500"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                            </svg></a>
                    </div>

                    <div class="hover:border-4 p-2">
                        <a href="https://x.com/Floris_Melchers" target="_blank"><svg class="h-8 w-8 text-pink-500"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                            </svg></a>
                    </div>

                </div>

                <img src="img/Floris-img.jpg" alt="profile picture of Floris" class="my-14 pl-0 w-4/5">
            </div>

            <div class="mx-auto my-auto">
                <h2
                    class="text-8xl text-title uppercase font-antonio 
                font-bold whitespace-pre-line leading-tight">
                    my name is <br>Floris melchers</h2>
                <h4 class="text-6xl text-subtitle uppercase font-antonio leading-none">I am a front-end developer</h4>

                <div class="flex mt-10 p-2.5">
                    <h4 class="text-6xl text-subtitle uppercase font-antonio ">Techstack |</h4>

                    <img src="img/html.svg" alt="html logo">

                    <img src="img/css.svg" alt="css logo">

                    <img src="img/javascript.svg" alt="javascript logo">

                    <img src="img/php.svg" alt="php logo">

                    <img src="img/laravel.svg" alt="laravel logo" class="p-2.5">
                </div>
            </div>
        </div>

    </section>

    <section id="about">

        <div class="text-center w-3/5 mx-auto mt-24">
            {{-- <h3 class="text-5xl text-subtitle uppercase font-antonio">About me</h3> --}}
            <h2 class="text-7xl text-title uppercase font-antonio font-bold leading-none">I am a passionate front-end
                developer from the Netherlands.</h2>
            <p class="text-xl font-antonio text-text">
                I am a front-end developer with a passion for creating beautiful and user-friendly websites. I have
                experience with HTML, CSS, JavaScript, PHP, and Laravel. I am always eager to learn new things and
                improve my skills. I am a team player and I love working together with other developers to create
                amazing websites.
            </p>
        </div>

    </section>

    <section id="portfolio">

        <div class="text-center w-3/5 mx-auto my-24 ">
            {{-- <h3 class="text-5xl text-subtitle uppercase font-antonio">Portfolio</h3> --}}
            <h2 class="text-7xl text-title uppercase font-antonio font-bold leading-none">My portfolio</h2>
            <h3 class="text-5xl text-subtitle uppercase font-antonio mb-5">Each project is a learning experience.</h3>
        </div>

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
                        {{-- <a href="{{ route('projects.show', $project->id) }}"
                            class="text-xl text-center font-antonio text-subtitle border-4 p-2 hidden group-hover:inline-block">Edit
                            project</a> --}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center w-3/5 mx-auto my-24 ">
            <a href="/projects" class="text-subtitle font-antonio font-bold border-4 p-5 text-xl hover:prima-ry-bg">Check
                out all my projects</a>
        </div>
    </section>

    <section id="contact">
        <div class="mx-auto bg-primary-bg w-2/3 text-center p-5">
            <h2 class="uppercase text-5xl font-antonio font-bold text-main-bg m-5"><a
                    href="mailto::Floris@Floriscodes.nl" class="border-4 p-2">Email me </a></h2>




            <div class="text-icon flex justify-around content-center">

                <div class="hover:border-4 p-2">
                    <a href="https://www.linkedin.com/in/florismelchers/" target="_blank"><svg class="h-8 w-8"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg></a>
                </div>

                <div class="hover:border-4 p-2">
                    <a href="https://github.com/floris29" target="_blank"><svg class="h-8 w-8 text-pink-500"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                        </svg></a>
                </div>

                <div class="hover:border-4 p-2">
                    <a href="https://x.com/Floris_Melchers" target="_blank"><svg class="h-8 w-8 text-pink-500"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                        </svg></a>
                </div>
            </div>
        </div>

    </section>

    <x-footer />
@endsection
