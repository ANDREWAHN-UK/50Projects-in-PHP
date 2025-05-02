const imageContainer = document.querySelector('.image-container')

const imageURL = 'https://picsum.photos/'

const rows = 10

for (let i = 0; i < rows *3; i++){
    const image = document.createElement('img')
    image.src = `${imageURL}${getRandomSize()}`
    imageContainer.appendChild(image)
}


function getRandomSize(){
    return `${getRandomNumber()}/${getRandomNumber()}`
}

function getRandomNumber(){
    return Math.floor(Math.random() *10) + 300
}