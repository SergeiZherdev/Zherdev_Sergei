<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Styles/123.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
$glas = ['а','у','о','и','э','ы','А','У','О','И','Э','Ы'];
$site1 ='На данный момент работаю на ПАО "ММК", в должности мастера участка. Закончил МГТУ им. Носова по специальности "Промышленная электроника". Люблю активные виды спорта (футбол, баскетбол и т.д.), люблю кататься на горных лыжах, ну и просто проводить время в кругу семьи и друзей. Очень рад что попал на дынный курс. Все нравится, все очень интересно.';

$n=0;
function str($glas,$site1, $n)
{
    $site = mb_str_split($site1);
    foreach ($site as $value) {
        if (in_array($value, $glas)) {
            $n++;
        }
    }
    echo "Количество гласных на странице: $n", '<br>';
}
str($glas, $site1, $n);

function str2($site1){
    $site2= explode(' ', $site1);
    $n1= count($site2);
    echo "Количество слов на странице:", $n1;
}
str2($site1);

echo '<br>';
echo '<br>';
$date1 = "24.06.1987";
$date2=date("d.m.Y");
echo "Дата рождения:", $date1,'<br>';
echo "Текущая дата:", $date2,'<br>';
function data($date1,$date2){
    $date3 = strtotime($date1);
    $date4 = strtotime($date2);
    $date5 = $date4 - $date3;
    echo "Количество дней между датами:", floor($date5 / (60 * 60 * 24));
}
data($date1,$date2);
?>

    <footer class="footer">
        <h3>Контакты:</h3>
        <h5>+7-906-871-88-00</h5>
        <div>
            <a href="homework.php"><img src="Images/inst.png" alt="Упс" width="30" height="30" title="Instagram"></a>
        </div>
        <div>
          <a href="homework.php"><img src="Images/vk.png" alt="Упс" width="30" height="30" title="VK"></a>
        </div>
        <div>
        <a href="homework.php"><img src="Images/twitter.png" alt="Упс" width="30" height="30" title="Twitter"></a>
        </div>
</footer>
</body>
</html>

