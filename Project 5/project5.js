const loadText = document.querySelector('.loading-text')
const bg = document.querySelector('.bg')
const explanation = document.querySelector('.explanation')

let load = 0

let int = setInterval(blurring, 30 )

function blurring(){
    load ++

    if (load > 99) {
        clearInterval(int)
    }
    
    loadText.innerText = `${load}%`
    loadText.style.opacity = scale(load, 0, 100, 1, 0 )

    explanation.style.opacity = scale(load, 0, 100, 0, 1 )

    bg.style.filter=`blur(${scale(load, 0, 100, 30, 0 )}px)`

}

function scale (number, inMin, inMax, outMin, outMax) {//this is from stack overflow
    return (number - inMin) * (outMax - outMin) / (inMax - inMin) + outMin;
}