const squareContainer = document.getElementById("square-container");

const Squares = 500;

for (let i = 0; i < Squares; i++) {
  const square = document.createElement("div");
  square.classList.add("square");

  square.addEventListener("mouseover", () => setColour(square));
  square.addEventListener("mouseout", () => removeColour(square));

  squareContainer.appendChild(square);
}

function setColour(element) {
  const colour = getRandomColour();
  element.style.background = colour;
  element.style.boxShadow = ` 0 0 2px ${colour}, 0 0 10px ${colour}`;
  console.log("hovering");
}

function removeColour(element) {
  element.style.background = "#1d1d1d";
  element.style.boxShadow = "0 0 2px #000";
}

function getRandomColour() {
  const randomHue = Math.floor(Math.random() * 360);
  const randomColour = `hsl(${randomHue}, 100%, 50%)`;
  return randomColour;
}
