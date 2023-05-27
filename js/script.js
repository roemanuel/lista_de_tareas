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

document.querySelector(".task_main_new_task_h2").addEventListener("click", () => {
  if (document.querySelector(".task_main_new_task_i").classList.contains("bi-caret-down-fill")) {
    document.querySelector(".task_main_new_task_i").classList.replace("bi-caret-down-fill", "bi-caret-up-fill");
  } else {
    document.querySelector(".task_main_new_task_i").classList.replace("bi-caret-up-fill", "bi-caret-down-fill");
  }
})

document.querySelector(".task_main_tasks_h2").addEventListener("click", () => {
  if (document.querySelector(".task_main_tasks_i").classList.contains("bi-caret-down-fill")) {
    document.querySelector(".task_main_tasks_i").classList.replace("bi-caret-down-fill", "bi-caret-up-fill");
  } else {
    document.querySelector(".task_main_tasks_i").classList.replace("bi-caret-up-fill", "bi-caret-down-fill");
  }
})

document.querySelector(".new_task_contain_color_select").addEventListener("change", () => {
  let new_task_contain_color_preview = document.querySelector(".new_task_contain_color_preview");
  let color_sel = document.querySelector(".new_task_contain_color_select").value;
  new_task_contain_color_preview.style.backgroundColor = color_sel;
})