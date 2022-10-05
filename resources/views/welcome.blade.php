<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class=" p-4 pl-96 pr-96">


        <!-- CAROUSEL -->
        <div id="carouselExampleCaptions" class="carousel slide relative my-2" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 ">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full">
                    <img src="img/weddinglogo1.jpg" class="block w-full  " alt="..." />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item relative float-left w-full">
                    <img src="img/weddinglogo2.jpg" class="block w-full  " alt="..." />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item relative float-left w-full">
                    <img src="img/weddinglogo1.jpg" class="block w-full" alt="..." />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>

        <!-- Article -->
        <div class="grid grid-rows-3 grid-flow-col gap-4 text-center w-full content-center pb-10">
            <div class="rounded-md border border-zinc-200 row-span-3 w-96 px-8 py-8">

                <div class=" -space-x-2 overflow-hidden object-center mb-8">
                    <img class="inline-block h-40 w-40 rounded-full ring-2  ring-white " src="img/avatar1.jfif" alt="">
                </div>
                <hr class="px-3 py-3">

                <div>
                    <div class="grid grid-row-2 gap-2  bg-violet-50 ">  
                        <div class="text-left text-sm font-base font-serif text-gray-400">
                            Name
                        </div>
                        <div class="text-left font-serif text-lg tracking-wide bg-orange-100">Christopher James</div>
                    </div>

                    <div class="grid grid-row-2 gap-2 bg-violet-50">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Contact Number
                        </div>
                        <div class="text-left font-serif text-lg tracking-wide bg-orange-100">+639951388632</div>
                    </div>
                    <div class="grid grid-row-2 gap-2 bg-violet-50">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Email
                        </div>
                        <div class="text-left font-serif text-lg tracking-wide bg-orange-100">cjdc1414@gmail.com</div>
                    </div>
                    <div class="grid grid-row-2 gap-2  bg-violet-50">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Shared on
                        </div>
                        <div class="bg-orange-100">
                            <svg class="w-6 h-6 text-blue-600 fill-current " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                           
                        </div>
                    </div>
                    <div class="grid grid-row-2 gap-2 bg-violet-50 ">
                        <div class="text-left text-sm  font-base font-serif text-gray-400">
                            Shared on
                        </div>
                        <div class="bg-orange-100">
                            <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </div>
                    </div>
                    
                    <div class="grid grid-row-2 gap-2 bg-violet-50 ">
                    <a href="/viewas" class=" h-12 px-4 mt-2 text-center text-base transition-colors duration-300 transform   no-underline hover:underline text-blue-600">
                            View As
                        </a>
                    </div>
                    <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.2828797253346!2d120.33868471536098!3d16.050803944193632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339167fd0100bfa3%3A0x392d5ed47cf7639e!2sUNIVERSIDAD%20DE%20DAGUPAN!5e0!3m2!1sen!2sph!4v1664930252461!5m2!1sen!2sph" class="w-full h-64" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>

                  
                </div>
            
            <div class="border-2 border-zinc-200 row-span-3 col-span-2">
                <div class="col-span-2  p-8 ">
                    <h1 class="font-bold text-2xl text-left" >About This Supplier</h1>
                    <p class="text-lg text-justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taal Vista Hotel is the only premier hotel in Tagaytay that remains as the top destination for weddings and social events. It is also known for catering numbers of intimate to large scale for life celebrations by providing the highest hospitality standards. Its lavish rooms and facilities, spacious and pillarless ballrooms, including the spectacular scenery from gardens and amazing Taal Lake View for that social media photo-worthy creates memorable experiences and fulfill guest’s expectations.
                        https://www.taalvistahotel.com .</p>
                </div>
                <hr>
                
                <div class="p-8">
                    <hr>
                    <h1 class="font-bold text-lg text-left  ">PHOTOS</h1>
                </div>
                <div class="grid grid-cols-3 p-2 gap-2">
                    <div class="border-2 border-zinc-200">
                        <img src="img/weddingphoto1.jpg" alt="">
                    </div>
                    <div class="border-2 border-zinc-200">
                        <img src="img/weddingphoto1.jpg" alt="">
                    </div>
                    <div class="border-2 border-zinc-200">
                        <img src="img/weddingphoto3.jpg" alt="">
                    </div>
                    <div class="border-2 border-zinc-200">
                        <img src="img/weddingphoto5.jpg" alt="">
                    </div>
                    <div class="border-2 border-zinc-200">
                        <img src="img/weddingphoto6.jpg" alt="">
                    </div>
                    <div class="border-2 border-zinc-200">
                        <img src="img/7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Body -->

</x-guest-layout>