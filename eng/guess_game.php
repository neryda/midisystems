<? include('header.php')?>


<div class="clear"></div><!--Ровняем float-->
<!--Начало///Создаем фон сайта\\\Начало-->
<div class="content">
  <div class="guess_game">


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
<script><!--скрипт JS для отображения неразмытых картинок-->
  window.onload = init;<!--Ждём загрузки страницы полностью-->

  function init() {<!--нам необходимо по тегу найти все img, и каждому элементу поставить в обработчик события выполнение функции-->
    var images = document.getElementsByTagName("img");<!--вызов находит все теги img и возвращает объекты, с которыми можно работать-->

    for (var i = 0; i < images.length; i++) {<!--перебираем каждое изображение-->
      images[i].onclick = showAnswer;<!--каждому img в обработчик события клик ставим исполнение функции showAnswer-->
    }
  };

  function showAnswer(eventObj) {<!--объект события передается при каждом щелчке-->
<!--при каждом вызове функции передается объект события - eventObj-->

console.log(eventObj);
    var image = eventObj.target;<!--свойство target события eventObj сообщает какой элемент сгенерировал данное событие-->
    var name = image.id;<!--свойство id - события target, для получения id картинки img-->
    name = "img/guess_game_img/" + name + ".jpg";

    image.src = name;<!--назначаем полученое имя свойству src - событию target-->

  }
</script>
<? include('footer.php')?>
