const wrapper = document.getElementById("scrollableWrapper");
let isDown = false;
let startX;
let scrollLeft;

wrapper.addEventListener("mousedown", (e) => {
  isDown = true;
  startX = e.pageX - wrapper.offsetLeft;
  scrollLeft = wrapper.scrollLeft;
});

wrapper.addEventListener("mouseleave", () => {
  isDown = false;
});

wrapper.addEventListener("mouseup", () => {
  isDown = false;
});

wrapper.addEventListener("mousemove", (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - wrapper.offsetLeft;
  const walk = (x - startX) * 2; // Adjust scrolling speed
  wrapper.scrollLeft = scrollLeft - walk;
});
