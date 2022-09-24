const slides = document.querySelectorAll('.carousel-el')

const left = document.querySelector('.carousel-left')
const right = document.querySelector('.carousel-right')

slides.forEach((slide, i) => {
  slide.style.transform = `translateX(${i * 100}%)`
})

let curSlide = 0
const maxSlide = slides.length

const goToSlide = slide => {
  slides.forEach(
    (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
  )
}

let sliderInterval = setInterval(() => {
  if (curSlide === maxSlide - 1) {
    curSlide = 0
  } else {
    curSlide++
  }
  goToSlide(curSlide)
}, 5000)

const nextSlide = () => {
  clearInterval(sliderInterval)

  sliderInterval = setInterval(() => {
    if (curSlide === maxSlide - 1) {
      curSlide = 0
    } else {
      curSlide++
    }
    goToSlide(curSlide)
  }, 3000)

  if (curSlide === 0) {
    curSlide = maxSlide - 1
  } else {
    curSlide--
  }
  goToSlide(curSlide)
}

const prevSlide = () => {
  clearInterval(sliderInterval)

  sliderInterval = setInterval(() => {
    if (curSlide === maxSlide - 1) {
      curSlide = 0
    } else {
      curSlide++
    }
    goToSlide(curSlide)
  }, 3000)

  if (curSlide === maxSlide - 1) {
    curSlide = 0
  } else {
    curSlide++
  }
  goToSlide(curSlide)
}

left.addEventListener('click', prevSlide)
right.addEventListener('click', nextSlide)

document.addEventListener('keydown', e => {
  if (e.key === 'ArrowLeft') prevSlide()
  if (e.key === 'ArrowRight') nextSlide()
})
