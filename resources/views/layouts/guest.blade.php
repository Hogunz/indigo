<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">


    <style>
        .flickity-viewport {
            height: 500px !important;
        }

        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }
    </style>


</head>

<body class="">
    <!-- ... -->
    <!-- component -->
    <div class="  ">
        <header class="  bg-blue-50 border-b dark:bg-gray-900 dark:border-gray-700 lg:w-full lg:top-0 lg:left-0 lg:z-30">
            <div class="container px-4 py-5 mx-auto space-y-4 lg:space-y-0 lg:flex lg:items-center lg:justify-between lg:space-x-10 pt-0 pl-0 pb-0">
                <div class="flex justify-between">
                    <a href="/index" class="text-gray-800 dark:text-gray-200">
                        <div class="flex items-center ">
                            <img src="img/2.png" width="150" height="200">
                            <p class="text-xl ml-1  ">Galala<strong>Dagupan</strong></p>
                        </div>
                    </a>

                    <div class="flex items-center space-x-2 lg:hidden">
                        <button @click="isOpen = !isOpen" class="p-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:bg-gray-100 dark:focus:bg-gray-800 focus:outline-none">
                            <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>


                <div class="hidden lg:flex lg:flex-row lg:items-center lg:justify-between lg:flex-1 lg:space-x-2">
                    <div class="flex flex-col space-y-3 lg:space-y-0 lg:flex-row lg:space-x-6 xl:space-x-8 lg:items-center">
                        <a href="#" class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href="/">Home</a>
                        <a href="supplier" class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300" href="/">Supplier</a>


                        <!-- <dropdown class="hidden lg:block">
                            <button class="text-gray-500 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400 transition-colors duration-300 flex items-center space-x-1 focus:outline-none">
                                <span>Category</span>
                            </button>
                        </dropdown> -->
                        <div class="span-2">
                            <button class="border rounded-full bg-indigo-100 hover:bg-violet-200 px-2 py-2 ">
                                LIST YOUR VENUES
                            </button>
                            <button class="border rounded-full bg-indigo-100 hover:bg-violet-200 px-2 py-2 ">
                                LIST YOUR SERVICES
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4">
                        <form action="" class="flex flex-wrap justify-between md:flex-row">
                            <input type="search" name="query" class=" rounded-none w-full h-12 px-4 text-sm text-gray-700 bg-white border border-gray-200  lg:w-20 xl:transition-all xl:duration-300 xl:w-36 xl:focus:w-44 lg:h-10 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-primary dark:focus:border-primary focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Search Supplier" required>
                            <input type="search" name="query" class=" rounded-none w-full h-12 px-4 text-sm text-gray-700 bg-white border border-gray-200  lg:w-20 xl:transition-all xl:duration-300 xl:w-36 xl:focus:w-44 lg:h-10 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-primary dark:focus:border-primary focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Search Location" required>
                            <button id="btnSearch" class="button border rounded-full  bg-red-600 rounded-l-lg px-2 py-2 " style="line-height: 1.15;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-5 h-5">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>
                        </form>
                        <a href=" " class="flex items-center justify-center h-12 px-4 mt-2 text-center text-base transition-colors duration-300 transform   no-underline hover:underline text-red-600">
                            Become a Vendor
                        </a>


                        <!-- Modal toggle -->
                        <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal">
                            Log In
                        </button>

                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative   p-4 w-full max-w-md h-full md:h-auto ">
                                <!-- Modal content -->

                                <div class="relative   rounded-lg shadow dark:bg-gray-700 ">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="border rounded-lg bg-white py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in </h3>
                                        <form class="space-y-6" action="{{ route('login') }}">
                                            <a class="px-7 py-3 rounded-full text-white font-medium text-sm leading-snug uppercase  shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3" style="background-color: #3b5998" href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                <!-- Facebook -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3.5 h-3.5 mr-2">
                                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                                </svg>Continue with Facebook
                                            </a>
                                            <a class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center" style="background-color: #55acee" href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                <!-- Twitter -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5 mr-2">
                                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                                </svg>Continue with Twitter
                                            </a>
                                            <div class="relative flex py-5 items-center">
                                                <div class="flex-grow border-t border-gray-400"></div>
                                                <span class="flex-shrink mx-4 text-gray-400">OR</span>
                                                <div class="flex-grow border-t border-gray-400"></div>
                                            </div>
                                            <div>

                                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email Address" required="">
                                            </div>
                                            <div>

                                                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                                                    </div>
                                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                                </div>
                                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forgot Password?</a>
                                            </div>
                                            <button type="submit" class="w-full text-white bg-green-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Continue</button>
                                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                Not registered? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Register Now</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </header>
    </div>



    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}

    </div>
    <!--FOOTER-->

    <section class="w-full mt-auto p-4 bg-gray-100 sm:p-6 dark:bg-gray-800">
        <footer>
            <div class="mx-auto max-w-screen-xl">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://cdd.edu.ph" class="flex items-center">
                            <h1 class="max-w-2xl mb-4 text-2xl font-black tracking-tight leading-none text-gray-800 dark:text-gray-300"><span class="text-blue-600">ARZA </span> TECHNOLOGIES</h1>
                        </a>
                        <a href="https://store.steps.com.ph" target="_store">
                            <h5 class="max-w-2xl font-black tracking-tight leading-none text-gray-800 dark:text-gray-300">STEP STORE</h5>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-2">
                                    <a href="https://www.facebook.com/arzatechdagupan" class="hover:underline ">ARZATECH</a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/steplms/" class="hover:underline">STEP</a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-2">
                                    <a href="https://laravel.com/" class="mr-2 hover:underline">Laravel</a>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind</a>
                                </li>
                                <li>
                                    <a href="https://www.digitalocean.com/" class="mr-2  hover:underline">Digital Ocean</a>
                                    <a href="https://aws.amazon.com/" class="hover:underline">Amazon AWS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-4 border-gray-200 sm:mx-auto dark:border-gray-700">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://cdd.step.com.ph" class="hover:underline">ARZATECH</a>. All Rights Reserved.
                    </span>
                </div>
            </div>
        </footer>
    </section>



    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        function carousel() {
            return {
                active: 0,
                init() {
                    var flkty = new Flickity(this.$refs.carousel, {
                        wrapAround: true
                    });
                    flkty.on('change', i => this.active = i);
                }
            }
        }

        function carouselFilter() {
            return {
                active: 0,
                changeActive(i) {
                    this.active = i;

                    this.$nextTick(() => {
                        let flkty = Flickity.data(this.$el.querySelectorAll('.carousel')[i]);
                        flkty.resize();
                        console.log(flkty);
                    });
                }
            }
        }
    </script>
    <script>

    </script>
</body>

</html>