<? include('header.php')?>




<div class="clear"></div><!--Ровняем float-->


<!--Начало///Создаем фон сайта\\\Начало-->
<div class="content">



  <div class="production">
    <div class="clear"></div><!--Ровняем float-->

    <div class="label_sort">Сортировка:
      <div class="clear"></div><!--Ровняем float-->
      <div class="button_sort name">По имени</div>
      <div class="button_sort price">По цене</div>
    </div>

      <div class="label_information">Красивые баянчики на любой вкус и цвет.<p></p>
      Тульские баяны - самые лучшие баяны в мире!</div>

    <div class="clear"></div><!--Ровняем float-->

<!--блок с товаром который будет копироваться сколько нужно-->
    <div class="block_production">
      <div class="img_production">
      <img class="picture_production" src="img/production/etud_black.jpg" alt="">
      <p class="production_name">
      Баян Этюд: "Чёрный"
      </p>
      <div class="cost">1000</div>
      </div>
    </div>


  </div>
</div>
<!--Конец-Подзаголовок-Конец-->

<!--js код для вывода и сортировки товара-продукции-->


<script>/*скрипт JS для работой с элементами страницы и массивом объектов*/

  var products = [ { name: 'Баян Этюд: "Чёрный"', cost: 1000, color: "Чёрный", name_src: "img/production/etud_black.jpg" },
                   { name: 'Баян Этюд: "Зелёный"', cost: 2000, color: "Зелёный", name_src: "img/production/etud_green.jpg" },
                   { name: 'Баян Этюд: "Красный"', cost: 3000, color: "Красный", name_src: "img/production/etud_red.jpg" },
                   { name: 'Баян Этюд: "Коричневый"', cost: 4000, color: "Коричневый", name_src: "img/production/etud_brown.jpg" }
                 ];

  window.onload = init; /*Ждём загрузки страницы полностью и вызываем init*/

function init() {
  var sort_name = document.getElementsByClassName('name');//получем массив со всеми объектами содержащие класс name
  var price_name = document.getElementsByClassName('price');//получем массив со всеми объектами содержащие класс price

  for (var i = 1; i < products.length; i++) {/*перебираем массив объектов с 1 элемента и копируем div с классом block_production*/
    document.querySelector(".production").appendChild(document.querySelector(".block_production").cloneNode(true));
//копируем целый блок с элементами в нужный div production, копий будет столько- сколько элементов в массиве объектов
//копии добавляются последними.
  };
//вызываем функцию, чтобы изменить скопированные блоки(придать вид)
  view_products();

  for (var i = 0; i < sort_name.length; i++) {/*перебираем массив объектов*/
    sort_name[i].onclick = sortByName;/*каждому элементу назначаем в свойстве onckick обработчик события sortByName*/
  };
  for (var i = 0; i < price_name.length; i++) {/*перебираем массив объектов*/
     price_name[i].onclick = sortByPrice;/*каждому элементу назначаем в свойстве onckick обработчик события sortByName*/
  };

  function sortByName() {/*это Обработчик События*/
    console.log("нажата кнопка сортировки name");
    products.sort(sort_products_name);//вызываем метод sort массива products, sort_products_name функция, которая будет сортировать массив
    view_products();//вызываем функцию, которая выведет все изменения на сайт
  };

  function sortByPrice() {//подобная функция-обработчик события
    console.log("нажата кнопка сортировки price");
    products.sort(sort_products_cost);
    view_products();
  };
};


  function sort_products_name(productA, productB) {//функция проводит сортировку по имени
  	if (productA.name > productB.name) {
  		return 1;
  	} else if (productA.name === productB.name) {
  		return 0;
  	} else {
  		return -1;
  	}
};

function sort_products_cost(productA, productB) {//функция проводит сортировку по стоимости
  if (productA.cost > productB.cost) {
    return 1;
  } else if (productA.cost === productB.cost) {
    return 0;
  } else {
    return -1;
  }
};

function view_products() { //Функция сопоставляет массив с объектами и объекты на странице сайта
var images = document.getElementsByTagName("img");//Загружаем в переменную массив с элементама найденными по Тегу(IMG)
var cost_name = document.getElementsByClassName("cost");//Загружаем в переменную массив с элементама найденными по имени классу
var production_name = document.getElementsByClassName("production_name");//Загружаем в переменную массив с элементама найденными по имени классу
console.log(production_name);
console.log(cost_name);
console.log(images);
for (var i = 0; i < products.length; i++) {/*перебираем каждый элемент*/

   images[i].src = products[i].name_src;//элементу найденному по тегу меняем путь файла, путь берем из массива объектов products
   cost_name[i].innerHTML = products[i].cost;//элементу найденному по классу меняем текст, текст берем из массива объектов products
   production_name[i].innerHTML = products[i].name;//элементу найденному по классу меняем текст, текст берем из массива объектов products
};
};

</script>

<div class="clear"></div><!--Ровняем float-->
<? include('footer.php')?>
