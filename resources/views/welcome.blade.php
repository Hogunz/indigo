<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
  <!-- ... -->
    <!-- component -->
    <header class=" bg-indigo-50 border-b dark:bg-gray-900 dark:border-gray-700 lg:fixed lg:w-full lg:top-0 lg:left-0 lg:z-30">
            <div class="container px-4 py-5 mx-auto space-y-4 lg:space-y-0 lg:flex lg:items-center lg:justify-between lg:space-x-10 pt-0 pl-0 pb-0">
                <div class="flex justify-between">
                    <a href="/" class="text-gray-800 dark:text-gray-200">
                        <div class="flex items-center ">
                        <img src="img/2.png" width="150" height="200">
    <p class="text-xl ml-1  ">Galala<strong>Dagupan</strong></p>
</div>                    </a>

                    <div class="flex items-center space-x-2 lg:hidden">
                        <button @click="isOpen = !isOpen" class="p-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:bg-gray-100 dark:focus:bg-gray-800 focus:outline-none">
                            <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <transition
                    v-cloak
                    enter-active-class="transition duration-100 ease-out transform"
                    enter-class="scale-95 opacity-0"
                    enter-to-class="scale-100 opacity-100"
                    leave-active-class="transition duration-75 ease-in transform"
                    leave-class="scale-100 opacity-100"
                    leave-to-class="scale-95 opacity-0"
                >
                    <div v-show="isOpen" class="flex flex-col space-y-4 lg:hidden">
                        <div class="flex flex-col space-y-3 lg:space-y-0 lg:flex-row lg:space-x-6 xl:space-x-8 lg:items-center">
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href="/">Home</a>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300 lg:hidden" href="/components">Components</a>
    <dropdown class="hidden lg:block">
        <button class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300 flex items-center space-x-1 focus:outline-none">
            <span>Components</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <template v-slot:content>
            <div class="overflow-y-auto w-36 max-h-96">
                <a href="" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    All Components
                </a>
              
                            </div>
        </template>
    </dropdown>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href="">Premium</a>
    
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href="/cheatsheet" target="_blank">Cheatsheet</a>

    </div>

<div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4">
    <dark-mode></dark-mode>

            <form action="/search" class="flex flex-wrap justify-between md:flex-row">
            <input type="search" name="query" class="w-full h-12 px-4 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg lg:w-20 xl:transition-all xl:duration-300 xl:w-36 xl:focus:w-44 lg:h-10 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-primary dark:focus:border-primary focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Search" required>
        </form>
        
    

            <a href="/login" class="flex items-center justify-center h-12 px-4 mt-2 text-sm text-center text-gray-600 transition-colors duration-300 transform border rounded-lg lg:h-10 dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
            Login
        </a>
    </div>                    </div>
                </transition>

                <div class="hidden lg:flex lg:flex-row lg:items-center lg:justify-between lg:flex-1 lg:space-x-2">
                    <div class="flex flex-col space-y-3 lg:space-y-0 lg:flex-row lg:space-x-6 xl:space-x-8 lg:items-center">
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href="/">Home</a>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300 lg:hidden" href="/components">Components</a>
    <dropdown class="hidden lg:block">
        <button class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300 flex items-center space-x-1 focus:outline-none">
            <span>Components</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

      
    </dropdown>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href=" ">Premium</a>
    
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href="/cheatsheet" target="_blank">Cheatsheet</a>

    </div>

<div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4">
    <dark-mode></dark-mode>

        <form action="/search" class="flex flex-wrap justify-between md:flex-row">
        <input type="search" name="query" class="w-full h-12 px-4 text-sm text-gray-700 bg-white border border-gray-200 rounded-lg lg:w-20 xl:transition-all xl:duration-300 xl:w-36 xl:focus:w-44 lg:h-10 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-primary dark:focus:border-primary focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Search" required>
        </form>
            <a href=" " class="flex items-center justify-center h-12 px-4 mt-2 text-sm text-center text-gray-600 transition-colors duration-300 transform border rounded-lg lg:h-10 dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                Login
            </a>
    </div>                
</div>
            </div>
        </header>

        <!-- CAROUSEL -->
        <div class="container box-content h-1/2 w-1/2 p-5  mx-auto mt-28">
            <div
                id="carouselDarkVariant"
                class="carousel slide carousel-fade carousel-dark relative"
                data-bs-ride="carousel"
                >
                <!-- Indicators -->
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button
                    data-bs-target="#carouselDarkVariant"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                    ></button>
                    <button
                    data-bs-target="#carouselDarkVariant"
                    data-bs-slide-to="1"
                    aria-label="Slide 1"
                    ></button>
                    <button
                    data-bs-target="#carouselDarkVariant"
                    data-bs-slide-to="2"
                    aria-label="Slide 1"
                    ></button>
                    <button
                    data-bs-target="#carouselDarkVariant"
                    data-bs-slide-to="2"
                    aria-label="Slide 1"
                    ></button>
                </div>

                <!-- Inner -->
                <div class="carousel-inner relative w-full overflow-hidden">
                    <!-- Single item -->
                    <div class="carousel-item active relative float-left w-full">
                    <img
                        src="img/wedding.jpg"
                        class="block w-full"
                        alt="Motorbike Smoke"
                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item relative float-left w-full">
                    <img
                        src="img/baptismal.jpg"
                        class="block w-full"
                        alt="Mountaintop"
                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h1 class="text-xl">Second slide label</h1>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item  relative float-left w-full">
                    <img
                        src="img/debut.png"
                        class="block w-full"
                        alt="Woman Reading a Book"
                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item  relative float-left w-full">
                    <img
                        src="img/seminar.jpg"
                        class="block w-full"
                        alt="Woman Reading a Book"
                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">Fourth slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div>
                </div>
                <!-- Inner -->

            <!-- Controls -->
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselDarkVariant"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselDarkVariant"
                data-bs-slide="next"
            >
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Body -->
   
        <div class="grid grid-cols-2 gap-4 text-center w-full content-center">
            <div class="relative rounded-md border border-gray-600 ...">  
                    dsadsa
            </div>
        <div class="border-2 border-indigo-600 ...">
            <div class="col-span-2">
                <h1 class="font-bold text-2xl">Lorem Ipsum</h1>
                <p class="text-lg"> Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            </div>
        </div>
        </div>
       
   
</x-guest-layout>
