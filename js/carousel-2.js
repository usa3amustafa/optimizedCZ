const slidesTwo = document.querySelectorAll('.carousel-el-2');

const leftTwo = document.querySelector('.carousel-left-2');
const rightTwo = document.querySelector('.carousel-right-2');

console.log(slidesTwo);

slidesTwo.forEach((slide, i) => {
  slide.style.transform = `translateX(${i * 100}%)`;
});

let curSlideTwo = 0;
const maxSlideTwo = slidesTwo.length;

console.log(maxSlideTwo);

const goToSlideTwo = slide => {
  slidesTwo.forEach(
    (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
  );
};

let sliderIntervalTwo = setInterval(() => {
  if (curSlideTwo === maxSlideTwo - 1) {
    curSlideTwo = 0;
  } else {
    curSlideTwo++;
  }
  goToSlideTwo(curSlideTwo);
}, 5000);

const nextSlideTwo = () => {
  clearInterval(sliderIntervalTwo);

  sliderIntervalTwo = setInterval(() => {
    if (curSlideTwo === maxSlideTwo - 1) {
      curSlideTwo = 0;
    } else {
      curSlideTwo++;
    }
    goToSlideTwo(curSlideTwo);
  }, 3000);

  if (curSlideTwo === 0) {
    curSlideTwo = maxSlideTwo - 1;
  } else {
    curSlideTwo--;
  }
  goToSlideTwo(curSlideTwo);
};

const prevSlideTwo = () => {
  clearInterval(sliderIntervalTwo);

  sliderIntervalTwo = setInterval(() => {
    if (curSlideTwo === maxSlideTwo - 1) {
      curSlideTwo = 0;
    } else {
      curSlideTwo++;
    }
    goToSlideTwo(curSlideTwo);
  }, 3000);

  if (curSlideTwo === maxSlideTwo - 1) {
    curSlideTwo = 0;
  } else {
    curSlideTwo++;
  }
  goToSlideTwo(curSlideTwo);
};

leftTwo.addEventListener('click', prevSlideTwo);
rightTwo.addEventListener('click', nextSlideTwo);

document.addEventListener('keydown', e => {
  if (e.key === 'ArrowLeft') prevSlideTwo();
  if (e.key === 'ArrowRight') nextSlideTwo();
});
