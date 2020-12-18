<?php
/***
  Главная страница сайта. Здесь я хочу выводить всю самую важную на мой взгляд информацию.
  В основном здесь будет информация про современное использование HTML и CSS, но возможно
  в будущем я опишу здесь так же JavaScript и начну копать в сторону понравившегося мне 
  фреймворка по данному языку. Мой сайт по сути создаётся для оттачивания навыков верстки,
  но я не брезгую и применяю базовые знания по PHP и MySQL для удобства наполнения сайта
  информацией. Ну если я могу их применить, разве это плохо? Хоть я и намерен заниматься
  исключительно вёрсткой, но хороших старых друзей не брошу хотя бы в данном проекте, да
  и люблю я PHP и MySQL. Ну что, настало время приступить к коду.
*/

require_once 'wRadchukDebug.php' ; // Файл для отладки
require_once 'wRadchukConfig.php'; // Файл с базовыми настройками

echo $wrHeadSite; // Подключаем тег <head></head>



// подключаемся к серверу
$link = mysqli_connect($wrDbHost, $wrDbUser, $wrDbPass, $wrDbName) or die(blockLogError("Connect: Ошибка " . mysqli_error($link)));
// выполняем операции с базой данных
      $query = "SET NAMES 'utf8';";
      $result = mysqli_query($link, $query) or die(blockLogError("SET: Ошибка " . mysqli_error($link)));
?>

<body>


  <header class="header">
    <div class="link">
      <p>
        <a href="/index.html">
          <img class="logo" src="style/logo.png" alt="logo.png">
        </a>
      </p>
    </div>
    <div class="desc">
      <h2>Персональный сайт для применения навыков кроссбраузерной адаптивной верстки</h2>
    </div>
  </header>


  <div class="content">

    <div class="info">

      <h1>* Мой дневник верстальщика</h1>


      <?php

      
      $query ="SELECT info FROM info";
      $result = mysqli_query($link, $query) or die(blockLogError("SELECT: Ошибка " . mysqli_error($link)));


      if($result) {
      $rows = mysqli_num_rows($result); // количество полученных строк

      echo "<ul>";
      for ($i = 0 ; $i < $rows ; ++$i) {
        $row = mysqli_fetch_row($result);

        echo "<li>";
        for ($j = 0 ; $j < 1 ; ++$j) echo "<p>$row[$j]</p>";
        echo "</li>";
    }

    echo "</ul></div> ";


    // очищаем результат

    mysqli_free_result($result);
  }

  ?>


  
  </div>
</div>


    <?php
    // закрываем подключение
    mysqli_close($link);
    ?>

    <!--
    <div class="text1">

    <p>Я просто хотел вывести текст завернутый в CSS и этого достаточно</p>
    <p>Мир в котором мы живём - полон красок, но обычно мы не замечаем их утопая в рутине</p>
    <p>Обязательно всего добьется тот кто смеётся проблемам в лицо</p>
    <p>В этом мире ничего не даётся просто так - даже в момент зачатия мы боремся за своё право на жизнь</p>
    <p>Любые преграды рушатся со временем, но только если их рушить</p>

    </div>
    -->

    <footer class="footer">
      <p>© <a href="https://vk.com/wradchuk">Владимир Радчук</a> | Мир в котором мы живём - полон красок, но обычно мы не замечаем их утопая в рутине</p>
    </footer>

  </body>
  </html>
