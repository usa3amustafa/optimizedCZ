const preLoader = document.querySelector('#preloader')
const nav = document.querySelector('nav')

window.addEventListener('load', function () {
  preLoader.style.display = 'none'
  nav.classList.add('slidedown')
})
