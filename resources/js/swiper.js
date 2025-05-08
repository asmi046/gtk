import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const swiper = new Swiper('.swiper', {
  slidesPerView: 'auto', // Автоподбор количества слайдов
  spaceBetween: 40,
  centeredSlides: true,
  loop: true,

  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },

  breakpoints: {
    320: {
      spaceBetween: 20
    },
    1024: {
      spaceBetween: 93
    }
  }
});
