$(document).ready(function(){

  $('.button_image_left').click(function(){
    $('.back_fixed').fadeIn();

  });

  $('.button_language_rus').click(function(){
    var url = "../index.php"; // возврат на русский язык, выход из папки eng
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
