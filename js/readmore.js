// read more
const readMoreBtn = document.querySelector('.read-more')
const readMoreText = document.querySelector('.read-more-text')
readMoreBtn.addEventListener('click', function () {
  readMoreText.classList.add('show-read-more')
  readMoreBtn.style.display = 'none'
})
