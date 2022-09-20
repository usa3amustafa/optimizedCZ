const preLoader = document.querySelector('#preloader')
const nav = document.querySelector('nav')
const scrollDownImg = document.querySelector('.scroll-down-img')

window.addEventListener('load', function () {
  preLoader.style.display = 'none'
  nav.classList.add('slidedown')
  scrollDownImg.classList.add('fade-in-down-animation')
})
