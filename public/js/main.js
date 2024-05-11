import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'


const swiper = new Swiper('.swiper', {
  slidesPerView: 5,
  loop: true,  

  effect: 'slide',
  autoplay: {
    delay: 1500,
    disableOnInteraction: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 2.5,
      
    },
    640: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 6,
    },
  },


});

