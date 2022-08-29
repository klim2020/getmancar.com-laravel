console.log('hhello');
const swiper_tarrifs = new Swiper('.swiper-tarrifs', {
  slidesPerView: 3,
  speed: 400,
  spaceBetween: 100,
  loop: true,

  autoHeight: false,

  on: {
    slideChange: function(swiper) {
      //const prev =  swiper.slides[swiper.realIndex-1];
      //const next =  swiper.slides[swiper.realIndex+1];
      //console.log(swiper.realIndex);

      //prev.classList.toggle('animate__move-to-bg');
      //next.classList.toggle('animate__move-to-bg');

    },
    sliderMove:function (swiper){
        console.log(this.getTranslate(), this.translate);
    }
  },

  navigation: {
    nextEl: '.swiper-button-next-tarrifs',
    prevEl: '.swiper-button-prev-tarrifs',
  },

  breakpoints:{
    992: {
      slidesPerView: 3,
    },
    300: {
      slidesPerView: 1,
    },
  },
});
swiper_tarrifs.on('sliderMove', function onSliderMove() {
    console.log(this.getTranslate(), this.translate); //-64 -64, or maybe other value, but not -320
});
