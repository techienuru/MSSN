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
