const preLoader = document.querySelector('.preloader')
const nav = document.querySelector('nav')
const mainLogo = document.querySelector('.main-logo')
const tagLine = document.querySelector('.tagline')
const scrollDownImg = document.querySelector('.scroll-down-img')

// slideshow
$('header').vegas({
  delay: 7000,
  timer: false,
  loop: true,
  shuffle: false,
  firstTransition: 'fade',
  firstTransitionDuration: 5000,
  transition: 'fade',
  transitionDuration: 2000,
  slides: [
    { src: './img/header/NYC_Image1.png' },
    { src: './img/header/ATL_Image2.png' },
    { src: './img/header/LA_Image3.png' },
  ],
})

const tagline = document.querySelector('.tagline')

// type writing
const typewriter = new Typewriter(tagline, {
  loop: true,
  delay: 75,
})

typewriter
  .pauseFor(4500)
  .typeString('creative director')
  .pauseFor(1000)
  .deleteAll()
  .typeString('creative director')
  .pauseFor(1000)
  .start()

window.addEventListener('load', function () {
  preLoader.style.display = 'none'

  nav.classList.add('slidedown')
  mainLogo.classList.add('slideup')
  tagline.classList.add('fadein')
  scrollDownImg.classList.add('fade-in-down-animation')
})
