// Функция для окрашивания навигации при прокрутке
const navbar = document.querySelector(".navbar"); //обращение к неизм.константе, чтобы найти класс навбар и поместить в переменную навбар
const logoLight = document.querySelector(".logo-light"); // создаем константу logoLight
const logo = document.querySelector(".logo"); // создаем константу logo
const mMenuToggle = document.querySelector(".mobile-menu-toggle"); // переменная для адаптивного меню
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page"); // проверка содержит ли главная страница класс front-page
// Функция, которая включает светлый режим для адаптивного меню, меняя лого местами
const lightModeOn = (event) => {
  // включаем светлую функцию
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  // выключаем светлую функцию
  navbar.classList.remove("navbar-light");
};

// Функция для смены высоты навигации
const changeNavHeight = (height) => {
  navbar.style.height = height; //меняем высоту навигации
};
window.addEventListener("scroll", () => {
  // если мы прокручиваем страницу, то высота становится 4.5rem
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  // если прокрутили обратно наверх, то высота становится обратно
  if (isFront) {
    // если мы на главной странице, то выполняется условие:
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});
// Функция для смены цвета навигации при прокрутки страницы

// Функции для открытия адаптивного меню навигации
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
  autoHeiht: true,
  slidesPerView: 1,
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
  slidesPerView: 1,
  navigation: {
    // подключение кнопок навигации
    nextEl: ".sliderSteps-button-next", // вперед листает слайд
    prevEl: ".sliderSteps-button-prev", // назад листает слайд
  },
  breakpoints: {
    // когда окно шире, чем >= 576px
    576: {
      slidesPerView: 2,
    },
    // когда окно шире, чем >= 768px
    768: {
      slidesPerView: 2,
    },
    // когда окно шире, чем >= 1024px
    1024: {
      slidesPerView: 3,
    },
    // когда окно шире, чем >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});
// Подключение слайдера blog
const swiperBlog = new Swiper(".blog-slider", {
  speed: 400, // управление с помощью API (скорость)
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    // подключение кнопок навигации
    nextEl: ".blog-button-next", // вперед листает слайд
    prevEl: ".blog-button-prev", // назад листает слайд
  },
  breakpoints: {
    // когда окно шире, чем >= 304px
    304: {
      slidesPerView: 1,
    },
    // когда окно шире, чем >= 768px
    768: {
      slidesPerView: 2,
    },
    // когда окно шире, чем >= 1024px
    1024: {
      slidesPerView: 2,
    },
  },
});
// модальное окно
const modal = document.querySelector(".modal"); //конст отвечающая за модальное окно
const modalDialog = document.querySelector(".modal-dialog"); //для отслеживания клика вне окна

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" || // если элемент содержит toggle modal ||(или)
    event.target.parentNode.dataset.toggle == "modal" || // родительский элемент содержит
    (!event.composedPath().includes(modalDialog) && //но если не(!) содержит и окно открыто, то закрываем
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open"); // открытие окна
  }
});
// Для закрытия окна добавляем иконке close, массив data-toggle
//закрытие окна Esc
document.addEventListener("keyup", (event) => {
  // если мы нажали кнопку, то мы отслеживаем что за кнопка keyup
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    // если нажимаем esc и(&&) открыто сейчас модальное окно
    modal.classList.toggle("is-open"); // то закрываем
  }
});

// валидация для форм
const forms = document.querySelectorAll("form"); // собираем формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: ".is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // наша форма
      const formData = new FormData(thisForm); // данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alert("Форма отправлена!");
          } else {
            alert("Ошибка. Текс ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});
