const screens = document.querySelectorAll(".screen");

const choose_insect_buttons = document.querySelectorAll(".chooseInsectButton");

const start_button = document.getElementById("startButton");

const game_container = document.getElementById("gameContainer");

const timeElement = document.getElementById("time");

const scoreElement = document.getElementById("score");

const messageElement = document.getElementById("message");

let seconds = 0;

let score = 0;

let selected_insect = {};

start_button.addEventListener("click", () => screens[0].classList.add("up"));

// When you click the button, it will create the chosen insect and then start the game

choose_insect_buttons.forEach((btn) => {
  btn.addEventListener("click", () => {
    const img = btn.querySelector("img");
    const src = img.getAttribute("src");
    const alt = img.getAttribute("alt");
    selected_insect = { src, alt };

    screens[1].classList.add("up");
    setTimeout(createInsect, 1000);
    startGame();
  });
});

// Starts the game, which starts the timer

function startGame(){
    setInterval(increaseTime, 1000)
}

// this is the timer

function increaseTime(){
    let m = Math.floor(seconds/60)
    let s = seconds % 60
    m = m < 10? `0${m}`:m
    s = s < 10? `0${s}`:s
    timeElement.innerHTML = `Time: ${m}:${s}`
    seconds++

}

// This function creates the insect and then allocates it a random position, creates it as a HTML img, and adds it into the game container HTML object

function createInsect() {
  const insect = document.createElement("div");
  insect.classList.add("insect");
  const { x, y } = getRandomLocation();
  insect.style.top = `${y}px`;
  insect.style.left = `${x}px`;
  insect.innerHTML = `<img src="${selected_insect.src}" alt="${
    selected_insect.alt
  }" style="transform: rotate(${Math.random() * 360}deg)" />`;
  insect.addEventListener("click", catchInsect);
  game_container.appendChild(insect);
}

// This function gets the random location for the insect created

function getRandomLocation() {
  const width = window.innerWidth;
  const height = window.innerHeight;
  const x = Math.random() * (width - 200) + 100;
  const y = Math.random() * (height - 200) + 100;
  return { x, y };
}

// This function "catches" the insect, which increases the score and spawns more insects

function catchInsect() {
    increaseScore()
    this.classList.add('caught')
    setTimeout(() => this.remove(), 2000)
    addInsects()
}

// This function creates more insects

function addInsects(){
    setTimeout(createInsect, 1000)
    setTimeout(createInsect, 1500)
}

function increaseScore(){
    score++

    if(score>19){
        messageElement.classList.add('visible') 
    }
    scoreElement.innerHTML = `Score: ${score}`
}