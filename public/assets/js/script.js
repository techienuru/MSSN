const hamburger = document.querySelector(".hamburger");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const hamburgerCloseBtn = document.querySelector(".js-hamburger-close");
const body = document.querySelector("body");

hamburger.addEventListener("click", () => {
  hamburgerMenu.style.display = "block";
  body.classList.add("no-scroll"); // Add class to stop scrolling
  hamburgerMenu.style.overflowY = "hidden";
});

hamburgerCloseBtn.addEventListener("click", () => {
  hamburgerMenu.style.display = "none";
  body.classList.remove("no-scroll"); // Remove class to enable scrolling
});
