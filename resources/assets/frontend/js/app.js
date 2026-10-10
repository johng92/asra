// import '../vendors/lightbox/lightbox-plus-jquery.js';
// import '../vendors/lightbox/lightbox.css';


let nav = document.querySelector(".header__nav");
let burger = document.querySelector(".hamburger");
let burgerFirstLine = document.querySelector(".hamburger__line:nth-child(1)");
let burgerSecondLine = document.querySelector(".hamburger__line:nth-child(2)");
let burgerThirdLine = document.querySelector(".hamburger__line:nth-child(3)");


burger.addEventListener("click", function() {
  burgerFirstLine.classList.toggle("hamburger__line-1");
  burgerSecondLine.classList.toggle("hamburger__line-2");
  burgerThirdLine.classList.toggle("hamburger__line-3");


  nav.classList.toggle("display__nav");
})

// dark Mode 


const button = document.getElementById('toggle-btn');

function darkMode() {
  document.body.classList.toggle('dark-theme');

  if (document.body.classList.contains('dark-theme')) {
    button.textContent = 'Switch to Light Mode';
  } else {
    button.textContent = 'Switch to Dark Mode';
  }
}

button.addEventListener('click', darkMode);