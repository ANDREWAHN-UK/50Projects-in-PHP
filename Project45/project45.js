
const openButton = document.querySelector('.openButton')

const closeButton = document.querySelector('.closeButton')

const nav = document.querySelectorAll('.nav')

openButton.addEventListener('click', () => {
    nav.forEach(navEl => navEl.classList.add('visible'))
})

closeButton.addEventListener('click', () => {
    nav.forEach(navEl => navEl.classList.remove('visible'))
})