require('./bootstrap');

import Alpine from 'alpinejs';
import 'tw-elements';
import 'flowbite';
window.Alpine = Alpine;
Alpine.start();

//SWIPER
// import Swiper JS
import Swiper from 'swiper/bundle';
// import Swiper styles
import 'swiper/css';
window.Swiper = Swiper;


const btn = document.getElementById('btn');

btn.addEventListener('click', function onClick() {
  btn.style.backgroundColor = 'salmon';
  btn.style.color = 'white';
});
