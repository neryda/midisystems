$(document).ready(function(){

  $('.button_image_left').click(function(){
    $('.back_fixed').fadeIn();

  });

  $('.button_language_eng').click(function(){
    var url = "eng/eng_index.php";
    $(location).attr('href',url);

  });


  $('.close_form').click(function(){
    $('.back_fixed').fadeOut();

  });


  $('.js-form-lw').formsLw({
    'color-error-default' : 'white',
    'color-error': 'tomato',
    'number-of-parents': 0,
    'post-file' : 'post.php',
    'emails' : 'venice939@mail.ru',
    'from' : 'midisystems.ru',
  });


});

window.onload = button_right_click; /*Ждём загрузки страницы полностью*/

function button_right_click(){//функция которая назначает обработчик события

var click_button_right_scroll = document.getElementsByClassName('button_image_right');//содержит массив с элементами в свойство
//onclick  одного из которых необходимо встроить обработчик события
console.log(click_button_right_scroll);
for (var i = 0; i < click_button_right_scroll.length; i++) {// перебираем все объекты и во все встраиваем обработчик события
  click_button_right_scroll[i].onclick = scroll_to_object;// чтобы когда кликнули на объект -> сработал обработчик(функция)scroll_to_object
};

};

function scroll_to_object() {/*это Обработчик События*/
  //он находит элемент по id и вызывает метод который фокусируется на этом объекте
  var object_to_scroll = document.getElementById('about_us_scroll');
  object_to_scroll.scrollIntoView()//scrollIntoView метод
};
