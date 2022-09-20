// preloader
const preLoader = document.querySelector('#preloader')
const nav = document.querySelector('nav')
const mainLogo = document.querySelector('.main-logo')
const tagLine = document.getElementById('tagline')
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
    .pauseFor(800)
    .deleteAll()
    .pauseFor(500)
    .typeString('Brand Developer')
    .pauseFor(800)
    .deleteAll()
    .pauseFor(500)
    .typeString('Illustrator')
    .pauseFor(800)
    .deleteAll()
    .pauseFor(500)
    .typeString('Designer')
    .pauseFor(800)
    .deleteAll()
    .pauseFor(500)
    .typeString('Father')
    .pauseFor(800)
    .deleteAll()
    .pauseFor(500)
    .typeString('Mentor')
    .pauseFor(800)
    .deleteAll()
    .pauseFor(500)
    .typeString('Entrepreneur')
    .pauseFor(800)
    .start()
})
