const navbar = document.querySelector(".navbar"); //обращение к неизм.константе, чтобы найти класс навбар и поместить в переменную навбар

window.addEventListener("scroll", () => {
  //когда пользователь начнет прокрутку страницы, вызовет действие:
  if (this.scrollY > 1) {
    //если это окно прокручивается по оси Y > 1 раза, то добавь класс navbar-light
    navbar.classList.add("navbar-light");
  } else {
    // если прокрутили обратно наверх, то удали класс navbar-light
    navbar.classList.remove("navbar-light");
  }
});
