const menuBtn = document.querySelector(".header-menu-toggle");
const menuNav = document.querySelector(".header-menu");

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("header-menu-activ");
  menuNav.classList.toggle("activ");
});
