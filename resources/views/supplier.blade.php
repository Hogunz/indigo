<x-guest-layout>

   <div class="container pt-16 mx-auto min-h-screen ">
      <div class="p-4">
         <div class="relative ">
            <video class="w-2/3 mx-auto " autoplay loop muted controls style="pointer-events:none;">
               <source src="videos/samplevid1.mp4" type="video/mp4">
            </video>
            <div class="max-w-7xl mx-auto absolute text-base text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" x-data="{
                text: '',
                textArray : ['Coordinator', 'Event Stylist', 'Caterer', 'Venue', 'Fashion Designer', 'Hair and Make Up', 'And Many More'],
                textIndex: 0,
                charIndex: 0,
                pauseEnd: 1500,
                cursorSpeed: 420,
                pauseStart: 20,
                typeSpeed: 110,
                direction: 'forward'
             }" x-init="(() => { 
             
                let typingInterval = setInterval(startTyping, $data.typeSpeed);
             
             function startTyping(){
                let current = $data.textArray[ $data.textIndex ];
                if($data.charIndex > current.length){
                     $data.direction = 'backward';
                     clearInterval(typingInterval);
                     setTimeout(function(){
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                     }, $data.pauseEnd);
                }   
                   
                $data.text = current.substring(0, $data.charIndex);
                if($data.direction == 'forward'){
                    $data.charIndex += 1;
                 } else {
                    if($data.charIndex == 0){
                        $data.direction = 'forward';
                        clearInterval(typingInterval);
                        setTimeout(function(){
                        
                            $data.textIndex += 1;
                            if($data.textIndex >= $data.textArray.length){
                                $data.textIndex = 0;
                            }
                        
                            typingInterval = setInterval(startTyping, $data.typeSpeed);
                        }, $data.pauseStart);
                    }
                    $data.charIndex -= 1;
                 }
              
             }
                        
             setInterval(function(){
                if($refs.cursor.classList.contains('hidden')){
                    $refs.cursor.classList.remove('hidden');
                } else {
                    $refs.cursor.classList.add('hidden');
                }
             }, $data.cursorSpeed);
         })()">
               <div class="relative h-auto">

                  <h1 class="text-7xl font-black" x-text="text"></h1>
                  <span class="absolute right-0 top-0 h-full w-5 -mr-8 bg-white" x-ref="cursor">

               </div>
            </div>
         </div>
      </div>
      <!--INTERACTIVE NAVBAR-->
      <div class="mb-4 border-b border-gray-200 dark:border-gray-700">

         <ul class="flex flex-wrap -mb-px text-sm font-small text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
         <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2" id="alls-tab" data-tabs-target="#alls" type="button" role="tab" aria-controls="alls" aria-selected="false">EVENT COORDINATOR / PLANNER</button>
        </li>
            <li class="mr-2" role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="photographer-tab" data-tabs-target="#photographer" type="button" role="tab" aria-controls="photographer" aria-selected="false">EVENT STYLISTS</button>
            </li>
            <li class="mr-2" role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="hair-tab" data-tabs-target="#hair" type="button" role="tab" aria-controls="hair" aria-selected="false">CATERER</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="designers-tab" data-tabs-target="#designers" type="button" role="tab" aria-controls="designers" aria-selected="false">HOTELS / VENUES</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="event-tab" data-tabs-target="#event" type="button" role="tab" aria-controls="event" aria-selected="false">FASHION DESIGNER</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="cake-tab" data-tabs-target="#cake" type="button" role="tab" aria-controls="cake" aria-selected="false">HAIR & MAKE UP</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="cocktail-tab" data-tabs-target="#cocktail" type="button" role="tab" aria-controls="cocktail" aria-selected="false">CAKES AND SWEETS</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="caterer-tab" data-tabs-target="#caterer" type="button" role="tab" aria-controls="caterer" aria-selected="false">EMCEES / HOSTS</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="invitations-tab" data-tabs-target="#invitations" type="button" role="tab" aria-controls="invitations" aria-selected="false">INVITATIONS / SOUVENIRS</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="bridal-tab" data-tabs-target="#bridal" type="button" role="tab" aria-controls="bridal" aria-selected="false">ENTERTAINMENT</button>
            </li>
            <li role="presentation">
               <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="emcee-tab" data-tabs-target="#emcee" type="button" role="tab" aria-controls="emcee" aria-selected="false">OTHERS</button>
            </li>
         
         </ul>
      </div>
      <div id="myTabContent">
     
<!--Event Coordinator-->
         <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="alls" role="tabpanel" aria-labelledby="alls-tab">
         <div class="grid grid-cols-4 gap-4">
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="alls" role="tabpanel" aria-labelledby="alls-tab">
       
    </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">asdasd</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div> <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div> <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div> <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div> <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div> <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div> <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div> <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/planner/planner4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
         </div>
         </div>
         <!--Event Stylist-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="photographer" role="tabpanel" aria-labelledby="photographer-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/stylist/stylist1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
         </div>
         </div>
         <!-- Caterer-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="hair" role="tabpanel" aria-labelledby="hair-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/caterer/caterer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>

         </div>
         </div>
         <!--Hotels and Venues-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="designers" role="tabpanel" aria-labelledby="designers-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue4.jpg" alt="" >
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/venue/venue1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>

         </div>
         </div>
         <!-- fashion designers-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="event" role="tabpanel" aria-labelledby="event-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/designer/designer1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>

         </div>
         </div>
         <!--hairs & make up-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="cake" role="tabpanel" aria-labelledby="cake-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/hair/hair1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>

         </div>
         </div>
         <!--cakes and sweets-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="cocktail" role="tabpanel" aria-labelledby="cocktail-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/cake/cake1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>

         </div>
         </div>
         <!--emcees / hotels-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="caterer" role="tabpanel" aria-labelledby="caterer-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/emcee_supplier/emcee1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>

         </div>
         </div>
         <!--INVITATION-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="invitations" role="tabpanel" aria-labelledby="invitations-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/invitation/invitation1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>


         </div>
         </div>
         <!--Entertainment-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="bridal" role="tabpanel" aria-labelledby="bridal-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/musicians_supplier/musician1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            

         </div>
         </div>
          <!--Others-->
         <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="emcee" role="tabpanel" aria-labelledby="emcee-tab">
         <div class="grid grid-cols-4 gap-4">
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo2.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo3.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo4.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>

            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
            <div>
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/supplier_pic/photos/photo1.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            </div>
         </div>
         </div>
      

      </div>


      <!--TRY-->
      <!-- <div class="flex justify-center p-6">

         <div class="grid grid-rows-1  grid-cols-3 gap-2 text-center content-center   pb-10 ">
            <div class="border overflow-y-auto  w-80 p-4  py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
               <ul class="space-y-2">
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                           <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3">ALL</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                           <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap">PHOTOGRAPHER AND VIDEO</span>

                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                           <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">HAIR AND MAKE-UP</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">DESIGNERS</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="h-6 w-6 text-black" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" />
                           <circle cx="6" cy="7" r="3" />
                           <circle cx="6" cy="17" r="3" />
                           <line x1="8.6" y1="8.6" x2="19" y2="19" />
                           <line x1="8.6" y1="15.4" x2="19" y2="5" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">EVENT STYLISTS</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap">CAKES AND SWEETS</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">COCKTAILS AND MOBILE BAR</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">CATERERS</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="h-6 w-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                           <polyline points="22,6 12,13 2,6" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">INVITATIONS</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">BRIDAL CAR</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">EMCEES</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">MUSICIANS / ENTERTAINMENT</span>
                     </a>
                  </li>
               </ul>
            </div> -->




      <!--Featured Post and Non-Premium-->
      <!-- 
            <div class="max-w-sm  bg-white rounded-lg border border-gray-200 p-2 shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/meeting.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Meetings</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Show more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
            
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 p-2   shadow-md dark:bg-gray-800 dark:border-gray-700">
               <a href="#">
                  <img class="rounded-t-lg" src="img/meeting.jpg" alt="">
               </a>
               <div class="p-5">
                  <a href="#">
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Read more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                  </a>
               </div>
            </div>
             -->
   </div>
 



</x-guest-layout>