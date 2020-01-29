<? include('header.php')?>


<div class="clear"></div><!--Ровняем float-->
<!--Начало///Создаем фон сайта\\\Начало-->
<div class="content">

  <div class="guess_game">
    <div class="guess_game_rule">

      <h1 class="game_text">
      Попробуй угадать, что на картинке и кликни на неё.
      Изображение пропадет через несколько секунд.
      </h1>
      <div class="clear"></div><!--Ровняем float-->
    </div>

      <div class="guess_game_img">
      <img id="bayn" src="img/guess_game_img/bayn_blur.jpg" alt="">
      </div>



      <div class="guess_game_img">
      <img id="drum" src="img/guess_game_img/drum_blur.jpg" alt="">
      </div>

      <div class="guess_game_img">
      <img id="guitar" src="img/guess_game_img/guitar_blur.jpg" alt="">
      </div>

  </div>
</div>
<!--Конец///Подзаголовок\\\Конец-->


<div class="clear"></div><!--Ровняем float-->
<script>/*скрипт JS для отображения неразмытых картинок*/
  window.onload = init;/*Ждём загрузки страницы полностью*/

  function init() {/*нам необходимо по тегу найти все img, и каждому элементу поставить в обработчик события выполнение функции*/
    var images = document.getElementsByTagName("img");/*вызов находит все теги img и возвращает объекты списком, с которыми можно работать*/

    for (var i = 0; i < images.length; i++) {/*перебираем каждое изображение*/
      images[i].onclick = showAnswer;/*каждому img назначаем в свойстве onclick назначен обработчик события showAnswer*/
    }
  };

  function showAnswer(eventObj) {/*это Обработчик События*/
/*при каждом клике ему передается Объект События*/
/*при каждом вызове функции передается объект события - eventObj*/
    var image = eventObj.target;/*свойство target события eventObj сообщает какой элемент сгенерировал данное событие*/
    /*такой вид - guess_game.php:148 <img id=​"bayn" src=​"img/​guess_game_img/​bayn.jpg" alt>​*/
    var name = image.id;/*свойство id - события target, для получения id картинки img*/
    /*такой вид - bayn, т.е. id = byan*/
    name = "img/guess_game_img/" + name + ".jpg";
    /*далее выстраиваем путь до новой картинки*/
    image.src = name;/*назначаем полученое имя пути свойству src, которое принадлежит событию target*/
    setTimeout(reblur, 2000, image);/*запускаем обработчик события, который выполнит функцию reblur
     и передаем в него аргумент image который равен свойству target(свойство Объекта события)*/
  }

  function reblur(image) {/*функция для замены картинки*/
    var name = image.id;/*всё примерно тоже самое, найдем путь и подменим его*/
    name = "img/guess_game_img/" + name + "_blur.jpg";
    image.src = name;
  }
</script>
<? include('footer.php')?>
