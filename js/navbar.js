// navbar
const hamburger = document.querySelector('.hamburger')
const closeIcon = document.querySelector('.close-icon')
const navbar = document.querySelector('.nav-links')
const navLinks = document.querySelectorAll('.nav-link')

hamburger.addEventListener('click', () => {
  navbar.classList.add('show-nav-links')
})
closeIcon.addEventListener('click', () => {
  navbar.classList.remove('show-nav-links')
})

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    navbar.classList.remove('show-nav-links')
  })
})
