<?
date_default_timezone_set('Asia/Yekaterinburg');
$time = date("H:i:s");
echo $time;
function t($time)
{
    if ($time >= 8 && $time < 23) {
        echo('<body style="background-color: aquamarine">');
    } else {
        echo('<body style="background-color: darkslategray">');
    }
}
t($time);
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Styles/Stylenew.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>site</title>
</head>
<body>
      <header class="header">
      <? require_once 'header.php';?>
    </header>
      <main>
      <!-- <div class="foto"></div>
       <div class="name">Жердев Сергей Игоревич</div>
       <div class="info">На данный момент работаю на ПАО "ММК", в должности мастера участка. Закончил МГТУ им. Носова по специальности "Промышленная электроника".
           Люблю активные виды спорта (футбол, баскетбол и т.д.), люблю кататься на горных лыжах,
           ну и просто проводить время в кругу семьи и друзей.</div>
       <div class="like">Очень рад что попал на дынный курс. Все нравится, все очень интересно.</div><br>-->
      <!--<table>
          <tr>
              <td rowspan="0"><img src="Images/foto1.jpg" alt="нет фото" height="350" width="300"></td>
              <td colspan="2" style="font-size:25px; color: coral"  >Жердев Сергей Игоревич</td>
          </tr>
          <tr>
              <td>На данный момент работаю на ММК, в должности мастер участка. Закончил МГТУ им. Носова по специальности "промышленная электроника".
                  Люблю активные виды спорта (футбол баскетбол), люблю кататься на горных лыжах.
                  Ну и просто проводить время в кругу семьи и друзей.
              </td>
              <td>Очень рад что попал на дынный курс. Все нравится, все очень интересно.</td>
          </tr>
      </table>-->

          <Info class="information">
              <div class="foto"><img src="Images/foto1.jpg" alt="нет фото" height="100%" width="100%"></div>
              <div class="name">
                  <div class="name_1">Жердев Сергей Игоревич</div>
                  <div class="info_1">
                      <div class="Info_1_1">
                          <?
                          $str='На данный момент работаю на ПАО "ММК", в должности мастера участка. Закончил МГТУ им. Носова по специальности "Промышленная электроника". Люблю активные виды спорта (футбол, баскетбол и т.д.), люблю кататься на горных лыжах, ну и просто проводить время в кругу семьи и друзей';
                          function str1($str)
                          {
                              $str1 = mb_substr($str, 0, 37);
                              $str2 = mb_substr($str, 37);
                              echo '<span style="color: red">' . $str1 . '</span>', $str2;
                          }
                          str1($str);
                          ?>
                          </div>
                      <div class="like">
                          <?
                          $str3= 'Очень рад что попал на дынный курс. Все нравится, все очень интересно.';
                          $n = 1;
                          function str3($str3 , $n)
                          {
                              $arr1 = explode(' ', $str3);
                              foreach ($arr1 as $value) {
                                  if (($n % 2) == 0) {
                                      echo '<span style="color: blue">' . $value . ' ' . '</span>';
                                  } else {
                                      echo '<span style="color:darkorange">' . $value . ' ' . '</span>';
                                  }
                                  $n++;
                              }
                          }
                          str3($str3,$n);
                          ?>
                          </div>
                  </div>
              </div>
          </Info>
      <section class="container_1">
          <div class="foto_1">
              <div class="foto_1_1"><img src="Images/beach.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Пляж</div>
          </div>
          <div class="foto_1">
              <div class="foto_1_1"><img src="Images/forest.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Лес</div>
          </div>
          <div class="foto_1">
              <div class="foto_1_1"><img src="Images/city.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Город</div>
          </div>
          <div class="foto_1">
              <div class="foto_1_1"><img src="Images/auto.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Автомобиль</div>
          </div>
      </section>
      <section class="container_2">
          <div class="foto_2">
              <div class="foto_2_1"><img src="Images/pole.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Поле</div>
          </div>
          <div class="foto_2">
              <div class="foto_2_1"><img src="Images/podsolnuh.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Подсолнух</div>
          </div>
          <div class="foto_2">
              <div class="foto_2_1"><img src="Images/dog.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Собака</div>
          </div>
          <div class="foto_2">
              <div class="foto_2_1"><img src="Images/cat.jpg" alt="упс" height="100%" width="100%"></div>
              <div class="foto_text">Кошка</div>
          </div>
      </section>
      </main>
<footer>
    <? require_once 'footer.php';?>
</footer>
</body>
</html>