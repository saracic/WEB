let guilherme_menu = document.getElementById("menu");
let menu = document.getElementById("menu-mobile");
let overlay = document.getElementById("overlay-menu");
guilherme_menu.addEventListener("click", () => {
  menu.classList.add("abrindo-menu");
});

menu.addEventListener("click", () => {
  menu.classList.remove("abrindo-menu");
});

overlay.addEventListener("click", () => {
  menu.classList.remove("abrindo-menu");
});
