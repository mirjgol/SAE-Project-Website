const hamMenu = document.querySelector(".hamburger-menu");

const offScreenMenu = document.querySelector(".off-screen-navigation");

hamMenu.addEventListener("click", () => {
  hamMenu.classList.toggle("active");
  offScreenMenu.classList.toggle("active"); // toggle = umschalten
})