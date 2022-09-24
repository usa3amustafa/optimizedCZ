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

const preloaderFunc = function () {
  const preloaderInterval = setInterval(() => {
    preLoader.style.display = 'none'
    nav.classList.add('slidedown')
    mainLogo.classList.add('slideup')
    tagLine.classList.add('fadein-animation')
    scrollDownImg.classList.add('fade-in-down-animation')

    typewriter
      .pauseFor(2000)
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
  }, 3500)
}

window.addEventListener('load', function () {
  if (sessionStorage.getItem('dontload') === null) {
    preloaderFunc()
    sessionStorage.setItem('dontload', true)
  } else {
    preLoader.style.display = 'none'
    nav.classList.add('slidedown')
    mainLogo.classList.add('slideup')
    tagLine.classList.add('fadein-animation')
    scrollDownImg.classList.add('fade-in-down-animation')

    typewriter
      .pauseFor(2000)
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
  }
})

window.onbeforeunload = function () {
  localStorage.removeItem('dontload')
}
