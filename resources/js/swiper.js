import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/scss';
import 'swiper/scss/navigation';

const swiper = new Swiper('.swiper', {
    modules: [Navigation],
  slidesPerView: 4,
  speed: 400,
  spaceBetween: 100,
  loop: true,
    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4
        }
    },
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },

});
