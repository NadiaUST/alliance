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
    <title>Контрактное производство - Aliance Production</title>
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
    <section class="section about-company">
      <div class="container">
        <div class="seporator seporator-two"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <nav class="breadcrumbs" aria-label="Хлебные крошки">
          <ol>
            <li><a href="/">Главная</a></li>
            <li class="current">Контрактное производство</li>
          </ol>
        </nav>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section about-company -->
    <section class="section production">
      <div class="container">
        <div class="cards">
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/production/avto-him.png"
              alt="Production"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/production/bit-him.png"
              alt="Production"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/production/dezinfect.png"
              alt="Production"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/production/dezinfect.png"
              alt="Production"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/production/avto-him.png"
              alt="Production"
              class="card-image"
            />
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </div>
            <!-- /.card-content -->
            <img
              src="img/production/bit-him.png"
              alt="Production"
              class="card-image"
            />
          </a>
        </div>
        <!-- /.cards -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section production -->
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