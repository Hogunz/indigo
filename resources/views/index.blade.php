<x-guest-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>


  <main>
    <div class=" container-fluid mx-auto">
      <!--First Column -->
      <div class="grid grid-cols-1 lg:grid-cols-2 ">

        <div>
          <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-inner  px-10 py-10 relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img src="img/photographer.png" class="block w-full" alt="Wild Landscape" />
              </div>
              <div class="carousel-item  px-10 py-10 relative float-left w-full">
                <img src="img/wedding.png" class="block w-full" alt="Camera" />
              </div>
              <div class="carousel-item  px-10 py-10  relative float-left w-full">
                <img src="img/wedding.png" class="block w-full" alt="Exotic Fruits" />
              </div>
            </div>
            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="display invisible carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
          </div>

        </div>

        <div class="p-4 px-8  flex  place-items-start items-center w-full">
          <div>
            <h1 class="font-bold text-5xl text-left" style="color:#C8D9EB">Whatever you’re planning, <br>make it extraordinary.</h1>
            <h2 class="text-left text-lg  "><br>From birthday parties to weddings, we’ll help you<br> book the best talent for any occasion.</h2>
            <div>
              <form class=" ">
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
      <div class="grid grid-rows-2 grid-flow-col gap-4 text-center w-full content-center bg-slate-50  ">

        <div class=" row-span-2 col-span-2">
          <!-- <div class="col-span-2  p-8 ">

          
       </div> -->
          <div class="text-2xl font-bold mx-auto font-mono p-4 ">
            FEATURED SUPPLIERS
          </div>

          <!-- CAROUSEL -->
          <div class="container p-2 mx-auto">
            <main class=" pb-8  text-slate-300 flex-none items-center justify-center" x-data="carouselFilter()">

              <div class="flex py-8 ">
                <a class="font-sans border border-indigo-200 rounded-l-lg   inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-800': active != 0 }" href="#" @click.prevent="changeActive(0)">EVENT COORDINATOR / PLANNER</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-700': active != 1 }" href="#" @click.prevent="changeActive(1)">EVENT STYLISTS</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-800': active != 2 }" href="#" @click.prevent="changeActive(2)">CATERER</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-700': active != 3 }" href="#" @click.prevent="changeActive(3)">HOTELS / VENUES</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-800': active != 4 }" href="#" @click.prevent="changeActive(4)">FASHION DESIGNERS</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-700': active != 5 }" href="#" @click.prevent="changeActive(5)">HAIR & MAKEUP</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-800': active != 6 }" href="#" @click.prevent="changeActive(6)">CAKES & SWEETS</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-700': active != 7 }" href="#" @click.prevent="changeActive(7)">EMCEES / HOSTS</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-700': active != 8 }" href="#" @click.prevent="changeActive(8)">INVITATIONS / SOUVENIRS</a>
                <a class="font-sans border border-indigo-200 inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-700': active != 9 }" href="#" @click.prevent="changeActive(9)">ENTERTAINMENT</a>
                <a class="font-sans border border-indigo-200 rounded-r-lg inline-block p-4  border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400  dark:border-gray-700" :class="{ 'text-gray-700': active != 10 }" href="#" @click.prevent="changeActive(10)">OTHERS</a>

              </div>

              <div class="row-start-2 col-start-1" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Planner 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Planner 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Planner 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Planner 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/planner/planner1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/planner/planner2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/planner/planner3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/planner/planner4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>



              <div class="row-start-2 col-start-1" x-show="active == 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Stylist1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Stylist2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Stylist3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Stylist4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/event_stylist/stylist1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/event_stylist/stylist2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/event_stylist/stylist3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/event_stylist/stylist4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row-start-2 col-start-1" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Caterer 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Caterer 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Caterer 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Caterer 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/caterer/caterer1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/caterer/caterer2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/caterer/caterer3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/caterer/caterer4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hotels and Venues</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hotels and Venues</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hotels and Venues</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hotels and Venues</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/venue/venue1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/venue/venue2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/venue/venue3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/venue/venue4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 4" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Fashion 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Fashion 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Fashion 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Fashion 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/fashion/fashion1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/fashion/fashion2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/fashion/fashion3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/fashion/fashion4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 5" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hair & Makeup 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hair & Makeup 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hair & Makeup 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Hair & Makeup 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/hair/hair1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/hair/hair2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/hair/hair3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/hair/hair4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 6" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Cake 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Cake 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Cake 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Cake 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/cake/cake1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/cake/cake2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/cake/cake3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/cake/cake4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 7" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Emcee 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Emcee 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Emcee 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Emcee 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/emcee/emcee1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/emcee/emcee2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/emcee/emcee3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/emcee/emcee4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 8" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Invitation 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Invitation 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Invitation 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Invitation 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/invitation/invitation1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/invitation/invitation2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/invitation/invitation3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/invitation/invitation4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 9" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Entertainment 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Entertainment 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Entertainment 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Entertainment 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/entertainment/entertainment1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/entertainment/entertainment2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/entertainment/entertainment3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/entertainment/entertainment4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row-start-2 col-start-1" x-show="active == 10" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                  <div class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">

                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 0" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Others 1</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 1" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Others 2</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 2" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Others 3</h1>
                    <h1 class="text-white absolute text-5xl uppercase font-black tracking-widest" x-show="active == 3" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-12" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-12">Others 4</h1>
                  </div>


                  <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/others/others1.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/others/others2.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/others/others3.jpg" loading="lazy">
                    </div>
                    <div class="w-3/5 px-4">
                      <img src="img/index_pic/others/others4.jpg" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>



          </div>
  </main>
  </div>


  </div>
  </div>
  <div>
    <div class="container p-4 mx-auto font-sans">
      <h1 class="font-bold text-center text-5xl tracking-widest">GALALA</h1>
      <p class="p-4 text-justify indent-8 tracking-wide ">

        Instagram is an image-first social platform. If your photos and videos aren’t up to scratch, you’ll have a hard time finding success.

        But even great images and videos can fall short of expectations if you’re a slouch in the Instagram captions department. The words that accompany your graphics are a key component of building a brand on the network, and especially forming a connection with fans and followers.

        The best Instagram captions can add context to your posts, show off your brand’s personality, entertain the audience and/or compel people to take action.

      </p>
    </div>
  </div>
  <!-- 
  <div class=" container p-4 mx-auto font-sans  ">
    <h1 class="font-bold text-center text-md text-black tracking-widest p-2">Most Featured</h1>
    <div class="grid grid-cols-4 gap-4 w-2/3 mx-auto ">
      <div class=""><img class="border rounded-lg" src="img/BandsGroups.jpg" alt=""></div>
      <div class=""><img class="border rounded-lg" src="img/Ensembles.jpg" alt=""></div>
      <div class=""><img class="border rounded-lg" src="img/Singers.jpg" alt=""></div>
      <div class=""><img class="border rounded-lg" src="img/SoloMusicians.jpg" alt=""></div>
    </div>
    <h1 class="font-bold font-sans text-center text-md text-black tracking-widest p-2">Most Popular</h1>
    <div class=" grid grid-cols-4 gap-4 w-2/3 mx-auto">
      <div class=" "><img class="border rounded-lg" src="img/ActorsSpeakers.jpg" alt="">
      </div>
      <div class=" "><img class="border rounded-lg" src="img/BitmapChildrensParties.jpg" alt=""></div>
      <div class=" "><img class="border rounded-lg" src="img/CircusAcrobatic.jpg" alt="">
      </div>
      <div class=" "><img class="border rounded-lg" src="img/Comedians.jpg" alt=""></div>
    </div>
    <h1 class="font-bold font-sans text-center text-md text-black tracking-widest p-2">Most Viewed</h1>
    <div class=" grid grid-cols-4 gap-4 w-2/3 mx-auto">
      <div class=" "><img class="border rounded-lg" src="img/FoodDrink.jpg" alt="">
      </div>
      <div class=" "><img class="border rounded-lg" src="img/OutdoorParties.jpg" alt="">
      </div>
      <div class=" "><img class="border rounded-lg" src="img/PhotoVideo.jpg" alt="">
      </div>
      <div class=" "><img class="border rounded-lg" src="img/ProfessionalServices.jpg" alt="">
      </div>
    </div> -->


<!--most featured-->
  <section class="overflow-hidden text-gray-700 ">
    <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
      <h1 class="font-bold text-center text-md text-black tracking-widest p-2">Most Featured</h1>
      <div class="flex flex-wrap -m-1 md:-m-2">
        <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
          </div>
        </div>
        <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
          </div>
        </div>
        <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
          </div>
        </div>
      </div>
    </div>
  </section>
<!--most popular-->
  <section class="overflow-hidden text-gray-700 ">
<div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
  <h1 class="font-bold text-center text-md text-black tracking-widest p-2">Most Popular</h1>
  <div class="flex flex-wrap -m-1 md:-m-2">
    <div class="flex flex-wrap w-1/3">
      <div class="w-full p-1 md:p-2">
        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
      </div>
    </div>
    <div class="flex flex-wrap w-1/3">
      <div class="w-full p-1 md:p-2">
        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
      </div>
    </div>
    <div class="flex flex-wrap w-1/3">
      <div class="w-full p-1 md:p-2">
        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
      </div>
    </div>
  </div>
</div>
</section>

<!--most viewed-->
<section class="overflow-hidden text-gray-700 ">
    <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
      <h1 class="font-bold text-center text-md text-black tracking-widest p-2">Most Viewed</h1>
      <div class="flex flex-wrap -m-1 md:-m-2">
        <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
          </div>
        </div>
        <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
          </div>
        </div>
        <div class="flex flex-wrap w-1/3">
          <div class="w-full p-1 md:p-2">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="pb-24"></div>
  <!-- <div>
          <h2 class="flex items-center justify-center h-12 px-4 text-center font-bold text-base transition-colors duration-300 transform ">
            or</h2>
          <a href=" " class="flex items-center justify-center h-8  text-center font-bold text-base no-underline hover:underline text-blue-600">

            See more Specific Supplier...
          </a>

        </div> -->
  </div>
  </div>

  <div class=" container mx-auto grid lg:grid-cols-2  ">
    <div class=" p-4 px-8  flex place-items-start items-center w-full">

      <div>
        <h1 class="font-bold text-3xl text-left ">Working with us is a pleasure</h1>
        <h2 class="text-left text-base  ">Don't let your uses guess by attaching tooltips and popoves to any element.<br> Just make sure you enable them first via JavaScript.<br><br>
          The kit comes with three pre-built pages to help you get started faster. You can <br>change the text and images and you're good to go.Just make sure you enable <br> them first via JavaScript.</h2>
      </div>

    </div>

    <div class=" flex   items-center w-full">
      <div>
        <img class="w-full object-cover" src="img/meeting.jpg" alt="">
      </div>
    </div>
  </div>

  <div class=" container mx-auto grid lg:grid-cols-2 ">
    <div class=" flex place-items-start items-center w-full">
      <div>
        <img class="w-full object-cover" src="img/meeting.jpg" alt="">
      </div>
    </div>
    <div class="p-2 px-8  flex   items-center w-full">
      <div>
        <h1 class="font-bold text-3xl text-left ">Working with us is a pleasure</h1>
        <h2 class="text-left text-base  ">Don't let your uses guess by attaching tooltips and popoves to any element.<br> Just make sure you enable them first via JavaScript.<br><br>
          The kit comes with three pre-built pages to help you get started faster. You can <br>change the text and images and you're good to go.Just make sure you enable <br> them first via JavaScript.</h2>
      </div>
    </div>
  </div>
  <div class=" container mx-auto grid lg:grid-cols-2  ">
    <div class=" p-4 px-8  flex place-items-start items-center w-full">

      <div>
        <h1 class="font-bold text-3xl text-left ">Working with us is a pleasure</h1>
        <h2 class="text-left text-base  ">Don't let your uses guess by attaching tooltips and popoves to any element.<br> Just make sure you enable them first via JavaScript.<br><br>
          The kit comes with three pre-built pages to help you get started faster. You can <br>change the text and images and you're good to go.Just make sure you enable <br> them first via JavaScript.</h2>
      </div>

    </div>

    <div class=" flex   items-center w-full">
      <div>
        <img class="w-full object-cover" src="img/meeting.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="pb-6"></div>
  </main>




</x-guest-layout>