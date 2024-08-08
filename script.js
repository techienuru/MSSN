const hamburger = document.querySelector(".hamburger");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const hamburgerCloseBtn = document.querySelector(".js-hamburger-close"); 

hamburger.addEventListener("click",()=>{
    hamburgerMenu.style.display = "block";
});

hamburgerCloseBtn.addEventListener("click",() => {
    hamburgerMenu.style.display = "none";
});
