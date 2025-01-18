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

/* 
    For Blog & Event Page
      - To load more blogs
                            */
const loadMoreBtn = document.querySelector(".js-load-more-blog-btn");
const moreBlogContainers = document.querySelectorAll(".js-more-blog");

let arrayIndex = 0;
loadMoreBtn.addEventListener("click", () => {
  moreBlogContainers.forEach((moreBlogContainer) => {
    if (arrayIndex == moreBlogContainer.dataset.arrayIndex) {
      moreBlogContainer.classList.remove("d-none");
    }
  });
  arrayIndex++;
});
