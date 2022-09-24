<x-guest-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>



  <div class="container-fluid  mx-auto">
    <!--First Column -->
    <div class="grid grid-cols-1 gap-16 lg:grid-cols-2 lg:gap-8">
      <div>
        <div id="carouselExampleCaptions" class="carousel slide relative my-2" data-bs-ride="carousel">
          <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 ">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active visually-hidden" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=" visually-hidden" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="visually-hidden" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
              <img src="img/guitarist.png" class="block w-full filter grayscale " alt="..." />
              <div class="carousel-caption hidden md:block absolute text-center">


              </div>
            </div>
            <div class="carousel-item relative float-left w-full">
              <img src="img/photographer.png" class="block w-full filter grayscale " alt="..." />
              <div class="carousel-caption hidden md:block absolute text-center">

              </div>
            </div>
            <div class="carousel-item relative float-left w-full">
              <img src="img/wedding.png" class="block w-full filter grayscale " alt="..." />
              <div class="carousel-caption hidden md:block absolute text-center">

              </div>
            </div>
          </div>
          <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon visually-hidden inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon visually-hidden inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
      <div class="p-4 px-8 mx-auto flex justify-center items-center w-full">
        <div>
          <h1 class="font-bold text-4xl text-left text-blue-500">Whatever you’re planning, <br>make it extraordinary.</h1>
          <h2 class="text-left text-md  "><br>From birthday parties to weddings, we’ll help you<br> book the best talent for any occasion.</h2>
          <div>
            <form class="p-2">
              <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
              <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
                </div>
                <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="What kind of talent or service can we help you find?" required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
              </div>
            </form>
          </div>
        </div>

      </div>
      
    </div>





    <!-- Article -->
    <div class="grid grid-rows-2 grid-flow-col gap-4 text-center w-full content-center bg-slate-50 ">

      <div class=" row-span-2 col-span-2">
        <!-- <div class="col-span-2  p-8 ">

          
       </div> -->
        <div class="text-2xl font-bold mx-auto  font-mono p-4 text-blue-500 ">
          FEATURED SERVICES
        </div>

        <!-- CAROUSEL -->
        <div class="container p-2 mx-auto">
          <main class="min-h pb-8  text-slate-300 flex-none items-center justify-center" x-data="carouselFilter()">
            <div class="container grid grid-cols-1">

              <div class="flex py-12 justify-center">
                <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-blue-500" :class="{ 'text-gray-800': active != 0 }" href="#" @click.prevent="changeActive(0)">Wedding</a>
                <a class="px-2 text-lg uppercase font-bold tracking-widest hover:text-blue-500" :class="{ 'text-gray-700': active != 1 }" href="#" @click.prevent="changeActive(1)">People</a>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Dragon Fruit</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Avocado</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Mango</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Orange</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1581375221876-8f287f7cd2cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1581375279144-bb3b381c7046?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1581375303816-4a17124934f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row-start-2 col-start-1" x-show="active == 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Beth</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Lee</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Jade</h1>
                    <h1 class="absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Drew</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1462804993656-fac4ff489837?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                    <div class="w-3/5 px-2">
                      <img src="https://images.unsplash.com/photo-1480455624313-e29b44bbfde1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </main>
        </div>
        <div>
          <a href=" " class="flex items-center justify-center h-12 px-4 mt-2 text-center font-bold text-base transition-colors duration-300 transform   no-underline hover:underline text-blue-600">
            See more Specific Supplier...
          </a>

        </div>

      </div>
    </div>
    <div class="container p-4 mx-auto font-serif">
      <h1 class="font-bold text-center text-5xl text-blue-500 tracking-widest">GALILA</h1>
      <p class="p-4 text-justify indent-8 tracking-wide ">
      Instagram is an image-first social platform. If your photos and videos aren’t up to scratch, you’ll have a hard time finding success.

      But even great images and videos can fall short of expectations if you’re a slouch in the Instagram captions department. The words that accompany your graphics are a key component of building a brand on the network, and especially forming a connection with fans and followers.

      The best Instagram captions can add context to your posts, show off your brand’s personality, entertain the audience and/or compel people to take action.

      Captions can be up to 2,200 characters in length and include up to 30 hashtags.

      That said, most captions are nowhere near that long or stuffed with that many hashtags. No matter the length, the important thing is for your Instagram captions to grab attention and be easy to read and follow.

      Here, you’ll find 264 Instagram captions you can model or just copy-and-paste directly into your own Instagram posts. At the end of the list, we’ll also provide a few tips for writing effective Instagram captions of your own.
      </p>
    </div>
</x-guest-layout>