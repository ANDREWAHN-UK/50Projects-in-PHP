// Use the below to test the js file has loaded

window.onload = function () {
  alert("doc loaded");
};

const header = document.getElementById("header");
const title = document.getElementById("title");
const excerpt = document.getElementById("excerpt");
const profile_img = document.getElementById("profile_img");
const name = document.getElementById("name");
const date = document.getElementById("date");

const animated_bgs = document.querySelectorAll(".animated-bg");
const animated_bg_text = document.querySelectorAll(".animated-bg-text");

setTimeout(getData, 2500)

function getData() {
  header.innerHTML =
    '<img src="https://images.unsplash.com/photo-1659480142923-0cd01191e0e9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">';
  title.innerHTML = " Lorem ipsum dolor sit amet consectetur.";
  excerpt.innerHTML =
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, dolorum?";
  profile_img.innerHTML =
    ' <img src="./media/web-developer-portrait.jpg" alt="">';
  name.innerHTML = "Andy";
  date.innerHTML = "2nd April 2025";

  animated_bgs.forEach(bg =>  bg.classList.remove('animated-bg'))
  animated_bg_texts.forEach(bg =>  bg.classList.remove('animated-bg-text'))
}
