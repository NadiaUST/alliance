<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title><?= $page_title?> - Aliance Production</title>
  </head>
  <body>
    <!-- Мобильное меню для адаптива -->
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-item">
          <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-sub-menu">
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/autohim.php"
                >Автомобильная химия</a
              >
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/autohim.php">Бытовая химия</a>
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/autohim.php"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/autohim.php">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/autohim.php"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/autohim.php"
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
        <a href="https://vk.com" class="mobile-icons-vk" target="_blank" aria-label="Мы в VK">
          <svg class="icon" width="20" height="20">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a
          href="https://www.instagram.com"
          class="mobile-icons-instagram"
          aria-label="Мы в instagram"
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
      <a href="./" class="mobile-menu-toggle" aria-label="Открыть меню">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" aria-label="Alliance Production — на главную" class="header-logo"  alt="Логотип">

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
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link"
            >Контрактное производство</a
          >
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link"
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
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone_logo"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
      <!-- блок с кнопкой -->
    </nav>
    <!-- navigation -->
    <header class="section about-company <?= $header_style;?> <?= $bg_image; ?> <?= $bg_tech ?> <?= $tech_image ?>">
      <div class="container <?= $title_color; ?>" >
        <div class="seporator seporator-two"></div>
        <h2 class="section-title"><?= $page_title ?> </h2>
        <nav class="breadcrumbs" aria-label="Хлебные крошки">
          <ol class="breadcrumbs-list <?= $title_color; ?>">
            <li ><a href="/">Главная</a></li>
            <?php
              // проверка заголовка страницы
              if ($page_title == 'Современная методология разработки одухотворила всех причастных' || $page_title == 'Автохимия AG-Tech' || $page_title == 'Автомобильная химия') {
                  echo ' ' . $breadcrumb;
              } 
              ?>
            <li class="current "><?= $page_title ?></li>
          </ol>
        </nav>
    </header>
      <!-- /.container -->
    </section>
    <!-- /.section about-company -->