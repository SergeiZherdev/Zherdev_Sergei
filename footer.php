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
$glas = ['H','а','у','о','и','э','ы','А','У','О','И','Э','Ы'];
$site1 =file_get_contents("homework.php",);
$site = mb_str_split($site1);
$n=0;
foreach ($site as $value){
    if(in_array($value,$glas))
    {$n ++;
    }
}
echo "Количество гласных на странице: $n", '<br>';
echo "Количество слов на странице:", str_word_count($site1);
echo '<br>';
$date1 = "24.06.1987";
$date2=date("d.m.Y");
echo "Дата рождения:", $date1,'<br>';
echo "Текущая дата:", $date2,'<br>';
$date3 = strtotime($date1);
$date4 = strtotime($date2);
$date5 = $date4-$date3;
echo "Количество дней между датами:", floor($date5 / (60 * 60 * 24));
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

