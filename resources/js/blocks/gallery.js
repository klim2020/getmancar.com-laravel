const swiper = new Swiper('.swiper', {
  centeredSlides: false,
  slidesPerView: 3,

  speed: 400,

  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },
  breakpoints: {
      1500:{
          spaceBetween: 80,
      },
      1100:{
          spaceBetween: 50,
      },
      0:{
          slidesPerView: 3,
      },
      990:{
          slidesPerView: 3,
      }

  }
});
