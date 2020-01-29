<!DOCTYPE html> <!--используется HTML5-->

<html>
<!-- -->
<head>
  <meta charset='utf-8'><!--Задает кодировку сайта-->
  <link rel="stylesheet" href="css/style.css"><!--Указание на использование таблицы стилей-->
  <link rel="stylesheet" href="css/style_blog_news.css"><!--Указание на использование таблицы стилей для раздела блог-->
  <link rel="stylesheet" href="css/style_guess_game.css"><!--Указание на использование таблицы стилей для игры-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/forms-lw.min.js"></script>
  <script src="js/script.js"></script>
  <title>MiDiSystems</title><!--Заголовок сайта-->
</head>
<!-- -->

<body><!--Тело сайта-->
<div class="back_fixed">

  <form action="" class="js-form-lw">
    <div class="close_form">
      <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z" fill="#fff"/></svg>
    </div>
    <div class="form-lw-thanks">
      Thanks! <br>Feedback sent!
    </div>
      <div class="form-lw-content">
        <input type="hidden" class="form-lw-title-form" value="Форма для сбора отзывов">
        <div class="title-form-lw">
          Product Order Form
        </div>

        <input type="text" class='form-lw-check-field' data-title='Имя' name='name' placeholder="Name">
        <input type="text" class='form-lw-check-field' data-title='Фамилия' name='last_name' placeholder="Last name">
        <input type="text" class='form-lw-check-field' data-title='Телефон' name='tel' placeholder="Telephone">

        <button>Submit</button>
      </div>
    </form>
</div>

<!--Начало///Шапка сайта\\\Начало-->
<div class="head"><!--Шапка с градиентом-->
  <div class="content"><!--Наполняем шапку с контентом-->
    <div class="head_logo"></div><!--Логотип баяна-->
    <div class="head_logo_name"></div>

    <div class="head_contact"><!--Правый квадрат с контактами-->
      <div class="language_eng button_language_eng">

      </div>
      <div class="language_rus button_language_rus"></div>
      <a href="tel: 89042134952" class="head_phone"><!--Текст телефона-->
        8-904-213-49-52<!--При нажатии позвонить-->
      </a>
      <a href="mailto: venice939@mail.ru" class="head_email"><!--Адрес емейла-->
        venice939@mail.ru<!--При нажатии отправить почту-->
      </a>
      <div class="head_adress"><!--Адрес компании-->
        Address: Voronezh, st. Perevertkina
      </div>
    </div>

  </div>
</div>

<div class="clear"></div>
<!--Конец///Шапка сайта\\\Конец-->
<!--Начало///Создаем меню сайта\\\Начало-->

<div class="menu"><!--Меню сайта-->
  <div class="content"><!--Для наполнения контентом-->
    <div class="menu_block">
    <ul><!--Разные блоки с будущим меню-->
      <li>
        <a href="/index.php">Home</a>
      </li>
      <li>
        <a href="/blog.php">The blog</a>
      </li>
      <li>
        <a href="/production.php">Products</a>
      </li>
      <li>
        <a href="/about.php">About us</a>
      </li>
    </ul>
    </div>
    <div class="search_icon"><!--Иконка поиска-->
      <svg width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
    </div>

  </div>
</div>
<div class="clear"></div>
<!--Конец///Создаем меню сайта\\\Конец-->
