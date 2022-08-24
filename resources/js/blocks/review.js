const swiper_review = new Swiper('.swiper-review', {
  slidesPerView: 3,
  speed: 400,
  spaceBetween: 100,
  loop: true,
  visibilityFullFit: true,
  autoResize: false,
  on: {
    slideChange: function(swiper) {
      const head = swiper.slides[swiper.realIndex + 1].querySelector('.slide__content-block h3').innerText;
      const text = swiper.slides[swiper.realIndex + 1].querySelector('.slide__content-block p').innerText;
      document.querySelector('.block-review .description-review-block').classList.toggle('animate__appear');

      setTimeout(() => {
        document.querySelector('.block-review .description-review-block h2').innerHTML = head;
        document.querySelector('.block-review .description-review-block p').innerHTML = text;
        document.querySelector('.block-review .description-review-block').classList.toggle('animate__appear');
      }, 1000);
    },
  },
  navigation: {
    nextEl: '.swiper-button-next-review',
    prevEl: '.swiper-button-prev-review',
  },
  autoHeight: true,
  breakpoints:{
    992: {
      slidesPerView: 3,
    },
    300: {
      slidesPerView: 1,
    },
  },
});
