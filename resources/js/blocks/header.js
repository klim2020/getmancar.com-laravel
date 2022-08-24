document.querySelectorAll('.dropdown .text-nav').forEach((i) => {
  i.addEventListener('click', function(e) {
    // eslint-disable-next-line no-undef

    const d = e.target.closest('.menu-block__inner-menu');
    // rotate arrow animation
    d.querySelector('.carret').classList.toggle('animate__rotate__rotate180');
    // d.querySelector('.carret .submenu').classList.add('animate__block__show');
    // d.querySelector('.carret .submenu').classList.add('fadeInDown');
    e.stopPropagation();
    e.preventDefault();
    // console.log(d);
  });
});

window.addEventListener(
  'click',
  () => {
    document.querySelectorAll('.animate__rotate__rotate180').forEach((el) => {
      el.classList.remove('animate__rotate__rotate180');
    });
  },
);

// eslint-disable-next-line no-undef
// $('.menu-block__inner-menu').click(() => { alert('hello'); });
document.querySelector('.burger-block__burger-button').addEventListener('click', (e) => {
  // анимация бургера
  // eslint-disable-next-line no-undef
  document.querySelector('.burger-button__dash__top').classList.toggle('animate__rotate__rotate45-and-move-down');
  document.querySelector('.burger-button__dash__middle').classList.toggle('animate__disappear');
  document.querySelector('.burger-button__dash__bottom').classList.toggle('animate__rotate__rotate-minus45-and-move-up');

  document.querySelector('.burger-block__burger-menu > .menu-block').classList.toggle('animate__appear');
  document.querySelector('.burger-block__burger-menu > .menu-block').classList.toggle('animate__scroll-up');
  document.querySelector('body').classList.toggle('lock');
});

document.querySelectorAll('.header-block-mobile__burger-block .menu-block__inner-menu a').forEach(function(e) {
  e.addEventListener('click', (e) => {
    // eslint-disable-next-line no-undef
    e.target.closest('.menu-block__inner-menu').querySelector('.submenu').classList.toggle('animate__unfold');
    e.target.closest('.menu-block__inner-menu').querySelector('.submenu').classList.toggle('animate__appear');
  });
});
