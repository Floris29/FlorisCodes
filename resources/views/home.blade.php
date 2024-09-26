@extends('components.layout')

@section('content')
    <section id="home" class="h-full">
        <div class="flex items-center justify-center h-full">
            <h1 class="uppercase text-9xl font-antonio font-bold text-title">Hello World</h1>
        </div>
    </section>

    <section id="me">

        <div class="grid grid-cols-2">
            <div class="bg-primary-bg grid grid-cols-2">

                <div class="text-icon w-10">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                        <rect x="2" y="9" width="4" height="12" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                    <svg class="h-8 w-8 text-pink-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                    </svg>
                    <svg class="h-8 w-8 text-pink-500" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                    </svg>
                </div>

                <img src="img/Floris-img.jpg" alt="profile picture of Floris" class="p-4">
            </div>

            <div>
                <div class="text-title uppercase font-antonio font-bold">
                    <h2 class="text-8xl">my name is Floris melchers</h2>
                    <div class="text-subtitle uppercase font-antonio font-bold">
                        <p class="text-2xl">I am a front-end developer</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
