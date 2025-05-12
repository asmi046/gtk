// import Swiper from 'swiper';
// import { Navigation } from 'swiper/modules';

// import 'swiper/scss';
// import 'swiper/scss/navigation';

// const swiper = new Swiper('.swiper', {
//     modules: [Navigation],
//   slidesPerView: 4,
//   speed: 400,
//   spaceBetween: 100,
//   loop: true,
//     breakpoints: {
//         640: {
//             slidesPerView: 2,
//         },
//         1024: {
//             slidesPerView: 4
//         }
//     },
//   navigation: {
//     nextEl: '#swiper-next',
//     prevEl: '#swiper-prev',
//   },

// });


import { register } from 'swiper/element/bundle';
register();

const any_tours = document.getElementById('ptn_swiper');

if (any_tours) {
    const swiperParams = {
        slidesPerView: 1.5,
        spaceBetween: 48,
        loop: true,
        autoplay: {
            delay: 4500,
        },
        breakpoints: {

         640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4
        }
        },

        navigation: {
            nextEl: '#swiper-next',
            prevEl: '#swiper-prev',
        }
      };

      // now we need to assign all parameters to Swiper element
      Object.assign(any_tours, swiperParams);

      // and now initialize it
      any_tours.initialize();
}
