const logos = document.querySelectorAll('.logo-img')

logos.forEach(logo =>
  logo.addEventListener('mouseover', () => {
    logo.classList.add('colored')
  })
)
