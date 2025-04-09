const hamburger = document.querySelector(".hamburger");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const hamburgerCloseBtn = document.querySelector(".js-hamburger-close");

hamburger.addEventListener("click", () => {
  hamburgerMenu.style.animation = "hamburgerMenuSlideIn 1s";
  hamburgerMenu.style.display = "block";
});

hamburgerCloseBtn.addEventListener("click", () => {
  hamburgerMenu.style.animation = "hamburgerMenuSlideOut 1s";
  hamburgerMenu.style.display = "none";
});
