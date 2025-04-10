const textEl = document.getElementById("text");
const speedEl = document.getElementById("speed");
const text =
  "AUTO TEXT GENERATOR - This was a fairly quick and easy project. This text is set in the js file. One could use an API, like in the jokes project, to randomly create different text";

let idx = 1;
let speed = 300 / speedEl.value;

writeText();

function writeText() {
  textEl.innerText = text.slice(0, idx);

  idx++;

  if (idx > text.length) {
    idx = 1;
  }

  setTimeout(writeText, speed);
}

speedEl.addEventListener("input", (e) => (speed = 300 / e.target.value));
