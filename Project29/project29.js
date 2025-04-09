const loveMe = document.querySelector(".loveMe");
const times = document.querySelector("#times");

let clickTime = 0;
let timesClicked = 0;

// loveMe is the div containing the Image. Below is what happens when you click on it

loveMe.addEventListener("click", (e) => {
  // check how fast the clicks are
  if (clickTime === 0) {
    clickTime = new Date().getTime();
  } else {
    // If the clicktime is less than 800 ms, i.e. fast, then we create a heart
    if (new Date().getTime() - clickTime < 800) {
      createHeart(e);
      clickTime = 0;
    } else {
      clickTime = new Date().getTime();
    }
  }
});

// Below, we create the i element in the html, then add the relevant classes
const createHeart = (e) => {
  const heart = document.createElement("i");
  heart.classList.add("fas");
  heart.classList.add("fa-heart");

  // check the position of the click event, and make sure we are targeting the click when it is within the image

  const x = e.clientX;
  const y = e.clientY;

  const leftOffset = e.target.offsetLeft;
  const topOffset = e.target.offsetTop;

  const xInside = x - leftOffset;
  const yInside = y - topOffset;

  // and now position the heart, with css values produced dynamically by the preceding code

  heart.style.top = `${yInside}px `;
  heart.style.left = `${xInside}px `;

  // then add the heart we have created to the loveMe element

  loveMe.appendChild(heart);

  // and then update the number of times clicked

  times.innerHTML = ++timesClicked;

//   Every heart created will still exist in the dom, so the below is needed. After 5 seconds, the created heart element is removed

  setTimeout(() => heart.remove(), 5000)
};
