const navbar = document.querySelector(".navbar"); //обращение к неизм.константе, чтобы найти класс навбар и поместить в переменную навбар
const logo = document.querySelector(".logo-svg use"); // создаем константу logo

window.addEventListener("scroll", () => {
  //когда пользователь начнет прокрутку страницы, вызовет действие:
  if (this.scrollY > 1) {
    //если это окно прокручивается по оси Y > 1 раза, то добавь класс navbar-light
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo"; // меняем baseVal на другой адрес, нашего svg
  } else {
    // если прокрутили обратно наверх, то удали класс navbar-light
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo_light";
  }
});
