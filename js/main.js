// Функция для окрашивания навигации при прокрутке
const navbar = document.querySelector(".navbar"); //обращение к неизм.константе, чтобы найти класс навбар и поместить в переменную навбар
const logoLight = document.querySelector(".logo-light"); // создаем константу logoLight
const logo = document.querySelector(".logo"); // создаем константу logo

// Функция, которая включает светлый режим для адаптивного меню, меняя лого местами
const lightModeOn = (event) => {
  // включаем светлую функцию
  navbar.classList.add("navbar-light");
  logo.style.display = "block"; // делаем видимым темный логотип
  logoLight.style.display = "none"; // меняем обратно цвет
};
const lightModeOff = (event) => {
  // выключаем светлую функцию
  navbar.classList.remove("navbar-light");
  logo.style.display = "none"; // делаем невидимым светлый логотип
  logoLight.style.display = "block"; // меняем обратно цвет
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

// Подключение слайдера block feautures
const swiper = new Swiper(".swiper", {
  speed: 400, // управление с помощью API (скорость)
  slidesPerView: 1, // количество слайдов на экране
  navigation: {
    // подключение кнопок навигации
    nextEl: ".slider-button-next", // вперед листает слайд
    prevEl: ".slider-button-prev", // назад листает слайд
  },
  breakpoints: {
    // когда окно шире, чем >= 576px
    576: {
      slidesPerView: 2,
    },
    // когда окно шире, чем >= 768px
    768: {
      slidesPerView: 3,
    },
    // когда окно шире, чем >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // когда окно шире, чем >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

// Подключение слайдера block steps
const swiperSteps = new Swiper(".swiperSteps", {
  speed: 400, // управление с помощью API (скорость)
  autoHeight: true, // авто-высота слайдов
  slidesPerView: 1, // количество слайдов на экране
  navigation: {
    // подключение кнопок навигации
    nextEl: ".sliderSteps-button-next", // вперед листает слайд
    prevEl: ".sliderSteps-button-prev", // назад листает слайд
  },
  breakpoints: {
    // когда окно шире, чем >= 576px
    576: {
      slidesPerView: 1,
    },
    // когда окно шире, чем >= 768px
    768: {
      slidesPerView: 2,
    },
    // когда окно шире, чем >= 1024px
    1024: {
      slidesPerView: 3,
    },
  },
});
