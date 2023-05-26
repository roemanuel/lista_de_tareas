document.querySelector(".nav_hamburger").addEventListener("click", () => {
  if (document.querySelector(".nav_hamburger").classList.contains("bi-list")) {
    document.querySelector(".nav_hamburger").classList.replace("bi-list", "bi-x");
    let nav = document.querySelector("nav");
    nav.style.setProperty("--movimiento", "translate(0%)")
    document.body.classList.add("body-scroll-lock");
  } else {
    document.querySelector(".nav_hamburger").classList.replace("bi-x", "bi-list");
    let nav = document.querySelector("nav");
    nav.style.setProperty("--movimiento", "translate(100%)")
    document.body.classList.remove("body-scroll-lock");
  }
})