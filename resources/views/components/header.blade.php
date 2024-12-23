<header id="myHeader" class="hidden">
    <nav x-data="{ open: false }"
        class="uppercase text-text font-antonio font-bold drop-shadow-xl flex justify-between items-center fixed">
        <div class="w-1/5">
            <a href="#"><img src="../img/Banner-ultra-light.png" alt="FlorisCodes logo" class="mt-3"></a>
        </div>
        <div class="mr-14 md:hidden sm:hidden xs:hidden">
            <a href="#me" class="p-4 text-sm-5xl drop-shadow-xl">Who am I?</a>
            <a href="#about" class="p-4 text-sm-5xl drop-shadow-xl">About me</a>
            <a href="#portfolio" class="p-4 text-sm-5xl drop-shadow-xl">Portfolio</a>
            <a href="#contact" class="p-4 text-sm-5xl drop-shadow-xl">Contact</a>
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
                        {{-- <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg> --}}
                    </button>
                </div>

                <div class="mt-8 space-y-4">
                    <x-responsive-nav-link href="#me" class="text-text text-xl">
                        Who am I?
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#about" class="text-text text-xl">
                        About me
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#portfolio" class="text-text text-xl">
                        Portfolio
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#contact" class="text-text text-xl">
                        Contact
                    </x-responsive-nav-link>
                </div>
            </div>
        </div>
    </nav>

</header>
