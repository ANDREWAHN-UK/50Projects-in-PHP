
const resultEl = document.getElementById('result')
const clipboardEl = document.getElementById('clipboard')
const lengthEl = document.getElementById('length')
const upperCaseEl = document.getElementById('uppercase')
const lowerCaseEl = document.getElementById('lowercase')
const symbolsEl = document.getElementById('symbols')
const numbersEl = document.getElementById('numbers')
const generateEl = document.getElementById('generate')

const randomFunc = {
    lower: getRandomLower,
    upper: getRandomUpper,
    number: getRandomNumber,
    symbol: getRandomSymbol
}

clipboardEl.addEventListener('click', () => {
    const textArea = document.createElement('textarea')
    const password = resultEl.innerText

    if(!password) {return}

    textArea.value = password
    document.body.appendChild(textArea)
    textArea.select()
    document.execCommand('copy')
    textArea.remove()
    alert('The password is now copied to the clipboard')
})
generateEl.addEventListener('click', () => {
    const length = +lengthEl.value
    const hasLower = lowerCaseEl.checked
    const hasUpper = upperCaseEl.checked
    const hasSymbol = symbolsEl.checked
    const hasNumber = numbersEl.checked

    resultEl.innerText = generatePassword(hasLower, hasUpper, hasNumber, hasSymbol, length)
})

function generatePassword(lower, upper, number, symbol, length){
    let generatedPassword = ''
    const typesCount = lower + upper + number + symbol
    const typeArr = [{lower}, {upper}, {number},{symbol}].filter(item=> Object.values(item)[0])
    
    if(typesCount === 0) {
        return ''
    }

    for(let i = 0; i < length; i+= typesCount){
        typeArr.forEach(type => {
            const funcName = Object.keys(type)[0]
            generatedPassword += randomFunc[funcName]()
        })
    }

    const finalPassword = generatedPassword.slice(0,length)
    return finalPassword
    
}

// Generate the random elements
function getRandomLower(){
    return String.fromCharCode(Math.floor(Math.random()*26) + 97)
}

function getRandomUpper(){
    return String.fromCharCode(Math.floor(Math.random()*26) + 65)
}

function getRandomNumber(){
    return String.fromCharCode(Math.floor(Math.random()*10) + 48)
}

function getRandomSymbol(){
    const symbols = '!@#$%^&*(){}[]=<>/,.'
    return symbols[Math.floor(Math.random() * symbols.length)]
}