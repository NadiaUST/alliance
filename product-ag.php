<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Автохимия AG-Tech - Aliance Production</title>
  </head>
  <body>
    <!-- Мобильное меню для адаптива -->
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-item">
          <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-sub-menu">
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/product.php"
                >Автомобильная химия</a
              >
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/product-ag.php"
                >Краски аэрозольные</a
              >
            </li>
          </ul>
        </li>
        <li class="mobile-menu-item">
          <a href="/own.php" class="mobile-menu-link"
            >Собственные торговые марки</a
          >
        </li>
        <li class="mobile-menu-item">
          <a href="/blog.php" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-item">
          <a href="/contact.php" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <!-- блок навигация -->
      <a href="tel:+74996861014" class="header-phone-link"
        >+7 (499) 686-10-14</a
      >
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24" fill="#5C8EE6">
          <use href="./img/sprite.svg#map"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="icon" width="20" height="20">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance" class="mobile-info-email">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-icons">
        <a href="https://vk.com" class="mobile-icons-vk" target="_blank">
          <svg class="icon" width="20" height="20">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a
          href="https://www.instagram.com"
          class="mobile-icons-instagram"
          target="_blank"
        >
          <svg class="icon" width="20" height="20">
            <use href="img/sprite.svg#instagram"></use>
          </svg>
        </a>
      </div>
      <!-- /.mobile-icons -->
    </div>
    <!-- /.mobile-menu -->
    <nav class="navbar navbar-light">
      <!-- Мобильное меню -->
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo_light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
        <!-- подключаем файл с лого спрайт -->
      </a>
      <!-- блок с логотипом -->
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="/about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="/contract.php" class="header-nav-link"
            >Контрактное производство</a
          >
        </li>
        <li class="header-nav-item">
          <a href="/own.php" class="header-nav-link"
            >Собственные торговые марки</a
          >
        </li>
        <li class="header-nav-item">
          <a href="/blog.php" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="/contact.php" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <!-- блок навигация -->

      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24" fill="#5C8EE6">
          <use href="./img/sprite.svg#phone_logo"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <!-- блок телефон -->
      <button class="navbar-button button" data-toggle="modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone_logo"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
      <!-- блок с кнопкой -->
    </nav>
    <!-- navigation -->
    <section class="section about-company about-company-car">
      <div class="container">
        <div class="seporator seporator-two"></div>
        <h2 class="section-title">Автохимия AG-Tech</h2>
        <nav class="breadcrumbs" aria-label="Хлебные крошки">
          <ol>
            <li><a href="/">Главная</a></li>
            <li><a href="/contract">Собственные торговые марки</a></li>
            <li class="current">Автохимия AG-Tech</li>
          </ol>
        </nav>
        <img class="about-image" src="/img/product-autohim.png" alt="" />
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section about-company -->
    <header class="header">
      <div class="container">
        <div class="swiper">
          <!-- Обложка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- Слайды -->
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="36" height="36">
                <use href="img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text header-features-text-black">
                Непрерывная работа c 2017 года
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="36" height="36">
                <use href="img/sprite.svg#certificat"></use>
              </svg>
              <p class="header-features-text header-features-text-black">
                Вся продукция сертифицирована
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="36" height="36">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text header-features-text-black">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="36" height="36">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text header-features-text-black">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-svg" width="36" height="36">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text header-features-text-black">
                Оперативное производство
              </p>
            </li>
          </ul>
          <!-- Кнопки навигации -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
        <!-- swiper -->
      </div>
      <!-- Контейнер -->
    </header>
    <!-- header -->
    <section class="section section-light">
      <div class="container">
        <div class="seporator seporator-two"></div>
        <h2 class="section-title">схема работы</h2>
        <!-- Слайдер -->
        <div class="swiper swiperSteps">
          <!-- Обложка слайдера -->
          <ol class="swiper-wrapper steps">
            <!-- Слайды -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">
                Заключение <br />
                договора
              </h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые <br />
                элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации <br />
                разума над эмоциями.
              </p>
            </li>
          </ol>
          <!-- Кнопки навигации -->
          <div class="sliderSteps-buttons primary-buttons-wrapper">
            <div class="sliderSteps-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="sliderSteps-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
        <!-- swiper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section-light -->
    <section class="section clients">
      <div class="container">
        <div class="clients-wrapper">
          <div class="clients-content">
            <div class="seporator"></div>
            <h2 class="section-title">
              Производим аэрозольную продукцию для разных сфер
            </h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#car"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#cosmetic"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#car-cosm"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#t-short"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#bricks"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-content -->
          <div class="clients-logo-list">
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
            <a href="#" class="clients-logo-item">
              <img
                src="img/bk.png"
                alt="logo: burger king"
                class="clients-logo"
              />
            </a>
          </div>
          <!-- /.clients-logo -->
        </div>
        <!-- /.clients-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section clients -->
    <!-- Модальное окно -->
    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="18" height="18">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="#" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-user-name"
                type="text"
                class="input modal-input"
                placeholder=" "
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-name"
                >Имя</label
              >
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input
                id="modal-user-phone"
                type="tel"
                class="input modal-input"
                placeholder=" "
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-user-phone"
                >Номер телефона</label
              >
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="./img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <!-- /.modal-form-footer -->
        </form>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php include_once('footer.php');?>
