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
    <title>Aliance Production</title>
  </head>
  <body class="front-page">
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
    <header class="header header-image">
      <nav class="navbar">
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
            <a href="/contracts.php" class="header-nav-link"
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
        <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
          <svg class="button-icon" width="24" height="24">
            <use href="img/sprite.svg#phone_logo"></use>
          </svg>
          <span class="button-text">Получить консультацию</span>
        </button>
        <!-- блок с кнопкой -->
      </nav>
      <!-- navigation -->
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <!-- /.seporator -->
          <h1 class="header-title">
            <?php echo "Комплексное обеспечение товарами и расходными материалами бизнеса"; ?>
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <div class="button button-container" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</div>
        </div>
        <!-- /.header-content -->
        <!-- Основной блок слайдера -->
        <?php include_once('./template-parts/swiper-block.php');?>
      </div>
      <!-- Контейнер -->
    </header>
    <!-- header -->
    <?php include_once('./template-parts/swiper-light-block.php');?>
    <?php include_once('./template-parts/production-block.php');?>
    <?php include_once('./template-parts/founder-block.php');?>
    <?php include_once('./template-parts/clients-block.php');?>
    <?php include_once('./template-parts/swiper-expert-block.php');?>
<?php include_once('footer.php');?>