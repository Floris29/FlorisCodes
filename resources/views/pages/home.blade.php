@extends('components.layout')

<x-header />

@section('content')
    <section class="h-full" style="height:100vh">
        <div class="flex items-center justify-center h-full">
            <h1
                class="uppercase font-antonio font-bold text-title  
            2xl:text-9xl xl:text-xl-9xl lg:text-lg-9xl md:text-md-9xl sm:text-8xl xs:text-md-6xl">
                Hello World</h1>
        </div>
    </section>

    <section id="me">
        <div class="grid grid-cols-[40%_60%] xs:block">
            <div
                class="bg-primary-bg grid grid-cols-[115px_auto] lg:grid-cols-[75px_auto] md:grid-cols-[60px_auto] sm:grid-cols-[50px_auto] xs:grid-cols-[85px_auto]">

                <div class="text-icon flex flex-col justify-around content-center flex-wrap">

                    <div class="hover:border-4 hover:border-icon p-1">
                        <a href="https://www.linkedin.com/in/florismelchers/" target="_blank"><svg class="h-8 w-8"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                <rect x="2" y="9" width="4" height="12" />
                                <circle cx="4" cy="4" r="2" />
                            </svg></a>
                    </div>

                    <div class="hover:border-4 hover:border-icon p-1">
                        <a href="https://github.com/floris29" target="_blank"><svg class="h-8 w-8 " viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                            </svg></a>
                    </div>

                    <div class="hover:border-4 hover:border-icon p-1">
                        <a href="https://x.com/Floris_Melchers" target="_blank"><svg class="h-8 w-8 " width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                            </svg></a>
                    </div>

                </div>

                <img src="img/Floris-img.jpg" alt="profile picture of Floris"
                    class="my-14 lg:my-10 pl-0 w-4/5 md:my-8 sm:my-6">
            </div>

            <div class="mx-auto my-auto xs:text-center">
                <h2
                    class="2xl:text-8xl xl:text-xl-8xl lg:text-lg-8xl md:text-md-7xl sm:text-6xl xs:text-5xl text-title uppercase font-antonio
                font-bold leading-tight">
                    my name is <br> Floris melchers</h2>
                <h4
                    class="text-6xl lg:text-lg-6xl md:text-md-5xl sm:text-sm-5xl xs:text-sm-4xl 
                text-subtitle uppercase font-antonio leading-none">
                    I am a Junior Software Developer</h4>

            </div>
        </div>
    </section>

    <section id="about">

        <h2 class="text-5xl text-title text-center uppercase font-antonio mt-24">About me</h2>

        <div class="grid grid-cols-2 gap-20 mt-5 md:block sm:block xs:block">

            <div class="w-4/5 2xl:ml-auto xl:ml-auto lg:ml-auto md:mx-auto sm:mx-auto xs:mx-auto">
                <h3 class="text-md-5xl text-subtitle uppercase font-antonio">Who am I?</h3>
                <div class="text-xl md:text-lg sm:text-sm font-antonio xs:text-sm text-text">
                    I am a junior software developer with experience in building dynamic,
                    user-friendly websites using HTML, CSS, JavaScript, PHP, and Laravel.
                    I am always eager to learn and improve my skills.
                    <br>
                    <br>
                    Beyond coding, I am also a dedicated swimmer at SBC2000, where I push myself
                    to improve both physically and mentally. Swimming has taught me the importance
                    of discipline, resilience, and teamwork—qualities I bring into my work as a developer.
                    <br>
                    <br>
                    In March of 2024, I officially started my journey as a software developer at Agency 6,
                    where I have been developing my own skills. Joining a professional team has
                    allowed me to grow both technically and creatively, and I am driven to continue
                    expanding my expertise in this ever-evolving field.
                </div>

            </div>

            <div class="w-4/5 md:mx-auto md:mt-5 sm:mx-auto sm:mt-5 xs:mx-auto xs:mt-5">
                <div class="inline-flex border-primary-bg border-2 text-center p-1">
                    <h3 class="text-md-5xl md:text-sm-4xl sm:text-sm-4xl xs:text-sm-4xl text-subtitle uppercase font-antonio hover:bg-primary-bg px-4 py-2 cursor-pointer"
                        id="skills">My skills</h3>
                    <h3 class="text-md-5xl md:text-sm-4xl sm:text-sm-4xl xs:text-sm-4xl text-subtitle uppercase font-antonio hover:bg-primary-bg px-4 py-2 cursor-pointer"
                        id="tools">My tools</h3>
                </div>
                <div class="flex-wrap" id="skills-list">
                    @foreach ($skills as $skill)
                        <div
                            class="px-8 py-4 mb-6 mr-6 border border-icon text-lg bg-primary-bg 
                        font-antonio font-bold text-text">
                            {{ $skill->skill }}</div>
                    @endforeach
                </div>
                <div class="flex-wrap" id="tools-list">
                    @foreach ($tools as $tool)
                        <div
                            class="group px-8 py-4 mb-6 mr-6 border border-icon text-lg bg-primary-bg font-antonio font-bold text-text ">
                            {{ $tool->tool }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="uppercase text-xl xs:text-lg font-antonio text-text font-bold text-center mt-5">
            <a href="mailto:Floris@Floriscodes.nl" class="hover:bg-main-bg bg-primary-bg px-8 py-4 xs:px-4 xs:py-4">Email me
            </a>
            <a download="CV-Floris_Melchers" href="CV-Floris_Melchers.pdf"
                class="hover:bg-main-bg bg-primary-bg px-8 py-4 xs:px-4 xs:py-4 ml-5 xs:ml-2 xs:mx-auto">Download my CV</a>
        </div>

        {{-- <div>
            <h3 class="text-md-5xl text-subtitle uppercase font-antonio">My experience</h3>
        </div> --}}

    </section>

    <section id="portfolio">
        <div class="text-center w-3/5 mx-auto my-24">
            <h2 class="text-7xl xs:text-6xl text-title uppercase font-antonio font-bold leading-none">My portfolio</h2>
            <h3 class="text-5xl xs:text-md-5xl text-subtitle uppercase font-antonio mb-5 leading-none">Each project is a
                learning experience.</h3>
        </div>

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

        <div class="text-center w-3/5 mx-auto my-24 ">
            <a href="/projects"
                class="text-subtitle font-antonio font-bold border-4 border-primary-bg p-5 xs:p-2 xs:text-sm text-xl hover:bg-primary-bg">Check
                out all my projects</a>
        </div>
    </section>

    <section id="contact">
        <div class="mx-auto bg-primary-bg w-2/3 text-center p-5">
            <h2 class="uppercase text-5xl xs:text-md-5xl font-antonio font-bold text-main-bg m-5"><a
                    href="mailto:Floris@Floriscodes.nl" class="hover:border-4 hover:border-icon p-2">Email me </a></h2>

            <div class="text-icon flex justify-around content-center">

                <div class="hover:border-4 hover:border-icon p-1">
                    <a href="https://www.linkedin.com/in/florismelchers/" target="_blank"><svg class="h-8 w-8"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg></a>
                </div>

                <div class="hover:border-4 hover:border-icon p-1">
                    <a href="https://github.com/floris29" target="_blank"><svg class="h-8 w-8 " viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                        </svg></a>
                </div>

                <div class="hover:border-4 hover:border-icon p-1">
                    <a href="https://x.com/Floris_Melchers" target="_blank"><svg class="h-8 w-8 " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
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
