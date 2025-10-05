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
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <script>
      /*! modernizr 3.6.0 (Custom Build) | MIT *
    * https://modernizr.com/download/?-webp-setclasses !*/
      !function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?"":"no-")+l.join("-"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split("."),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),"undefined"!=typeof t)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
    </script>
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
              <a class="mobile-submenu-link" href="/autohim.php">Бытовая химия</a>
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/tech.php"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/autohim.php">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-sub-menu-item">
              <a class="mobile-submenu-link" href="/tech.php"
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
            <a href="/trademarks.php" class="header-nav-link"
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
    <?php include_once('./template-parts/swiper-light-block.php');
    $block_title = 'Блог экспертов в области производства';?>
    <?php include_once('./template-parts/production-block.php');?>
    <?php include_once('./template-parts/founder-block.php');?>
    <?php include_once('./template-parts/clients-block.php');?>
    <?php include_once('./template-parts/swiper-expert-block.php');?>
<?php include_once('footer.php');?>