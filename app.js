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

const preLoader = document.querySelector('#preloader')
const nav = document.querySelector('nav')
const mainLogo = document.querySelector('.main-logo')
const tagLine = document.querySelector('.tagline')
const scrollDownImg = document.querySelector('.scroll-down-img')

// type writing
const typewriter = new Typewriter(tagLine, {
  loop: true,
  delay: 100,
})

window.addEventListener('load', function () {
  preLoader.style.display = 'none'

  nav.classList.add('slidedown')
  mainLogo.classList.add('slideup')
  tagLine.classList.add('fadein-animation')
  scrollDownImg.classList.add('fade-in-down-animation')

  typewriter
    .pauseFor(1300)
    .typeString('creative director')
    .pauseFor(1000)
    .deleteChars(8)
    .pauseFor(500)
    .typeString('designer')
    .pauseFor(1000)
    .deleteChars(8)
    .pauseFor(500)
    .typeString('illustrator')
    .pauseFor(1000)
    .start()
})
