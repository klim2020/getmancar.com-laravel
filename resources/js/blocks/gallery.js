const swiper = new Swiper('.swiper', {
  centeredSlides: false,
  slidesPerView: 3,
  speed: 400,
  spaceBetween: 50,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },
});
