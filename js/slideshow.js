// slideshow
$('header').vegas({
  delay: 7000,
  timer: false,
  loop: true,
  shuffle: false,
  firstTransition: 'fade',
  firstTransitionDuration: 1000,
  transition: 'fade',
  transitionDuration: 2000,
  slides: [
    { src: './img/header/NYC_Image1.webp' },
    { src: './img/header/ATL_Image2.webp' },
    { src: './img/header/LA_Image3.webp' },
  ],
})
