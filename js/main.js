// Функция для окрашивания навигации при прокрутке
const navbar = document.querySelector(".navbar"); //обращение к неизм.константе, чтобы найти класс навбар и поместить в переменную навбар
const logo = document.querySelector(".logo-svg use"); // создаем константу logo

// Функция, которая включает светлый режим для адаптивного меню
const lightModeOn = (event) => {
  // включаем светлую функцию
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
};
const lightModeOff = (event) => {
  // выключаем светлую функцию
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo_light";
};

window.addEventListener("scroll", () => {
  //когда пользователь начнет прокрутку страницы, вызовет действие:
  //если это окно прокручивается по оси Y > 1px, то добавь класс navbar-light
  this.scrollY > 1 ? lightModeOn() : lightModeOff(); // "?" - это if ":" - это else
  // если прокрутили обратно наверх, то удали класс navbar-light
});

// Функция для адаптивного меню
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const openMenu = (event) => {
  // функция открывания меню
  menu.classList.add("is-open"); // вешает класс is-open
  mMenuToggle.classList.add("close-menu"); // вешаем класс "закрытие меню"
  document.body.style.overflow = "hidden"; // запрещаем прокрутку сайта под меню
  lightModeOn();
};
const closeMenu = (event) => {
  // функция закрывания меню
  menu.classList.remove("is-open"); // удаляет класс is-open
  mMenuToggle.classList.remove("close-menu"); // удаляем класс "закрытие меню"
  document.body.style.overflow = ""; // возвращаем прокрутку сайта под меню
  lightModeOff();
};

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault(); // отключаем стандартный переход по ссылке
  menu.classList.contains("is-open") ? closeMenu() : openMenu(); // если меню имеет класс is-open, то закрой это меню, а если оно закрыто, то открой это меню
});
