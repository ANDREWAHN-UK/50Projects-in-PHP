
const ratings = document.querySelectorAll('.rating')

const sendButton = document.querySelector('#send')

const panel = document.querySelector('#panel')

const ratingsContainer = document.querySelector('.ratings-container')

let selectedRating = 'Happy'

// Whenever the panel is clicked, check if the clicked item has the
// class of ratings, and if it does, then clear the active class 
// from all the ratings before adding it to the clicked rating

ratingsContainer.addEventListener('click', (e) =>{
    if(e.target.parentNode.classList.contains('rating')){
        removeActive()
        e.target.parentNode.classList.add('active')
        selectedRating = e.target.nextElementSibling.innerHTML
    }
})

sendButton.addEventListener('click', (e) => {
    panel.innerHTML = `
    <i class="fas fa-heart"></i>
    <strong>Thankyou for your feedback</strong>
    <br>
    <strong> Feedback: ${selectedRating} </strong>
    <p> We'll use your feedback to improve what we do. </p>
    `
})

// The below function is called above, and removes any existing active class

function removeActive() {
    for(let i = 0; i < ratings.length; i++){
        ratings[i].classList.remove('active')
    }
}