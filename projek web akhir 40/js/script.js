// slider start
let list = document.querySelector(".carousel .carousel-inner");
let items = document.querySelectorAll(".carousel .carousel-inner .carousel-item");
let dots = document.querySelectorAll(".carousel .carousel-indicators li");
let prev = document.getElementById("prev");
let next = document.getElementById("next");

let refreshSlider = setInterval(() => {
  next.click();
}, 4000);

function reloadSlider() {
  let checkLeft = items[active].offsetLeft;
  list.style.left = -checkLeft + "px";

  let lastActiveDot = document.querySelector(".carousel .carousel-indicators li.active");
  lastActiveDot.classList.remove("active");
  dots[active].classList.add("active");
  clearInterval(refreshSlider);
  refreshSlider = setInterval(() => {
    next.click();
  }, 4000);
}
// slider end