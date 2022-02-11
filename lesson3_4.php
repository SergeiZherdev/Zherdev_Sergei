

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header class="header">
    <? require_once 'header.php';?>
</header>
<main>
    <?
    for($a = 5; $a <= 13; $a++){
        echo $a;
        echo '<br>';
    }
    echo '<br>';

    $num = 1000;
    $n = 0;
    while ($num >= 50){
        $num /=2;
        $n ++;
    }
    echo "Результат деления: $num", '<br>';
    echo "Количество итераций: $n", '<br>';

    $n1 = 0;
    for($num1 = 1000; $num1 <= 50; $num /=2){
        $n1 ++;
    }
    echo '<br>', "Результат деления: $num", '<br>';
    echo "Количество итераций: $n", '<br>';

    $i= 5;
    switch ($i){
        case '0': echo "0,1,2,3,4,5,6,7,8,9,10";break;
        case '1': echo "0,1,2,3,4,5,6,7,8,9";break;
        case '2': echo "0,1,2,3,4,5,6,7,8";break;
        case '3': echo "0,1,2,3,4,5,6,7";break;
        case '4': echo "0,1,2,3,4,5,6";break;
        case '5': echo "0,1,2,3,4,5";break;
        case '6': echo "0,1,2,3,4";break;
        case '7': echo "0,1,2,3";break;
        case '8': echo "0,1,2";break;
        case '9': echo "0,1";break;
        case '10': echo "0";break;
    }

    ?>

</main>

<foot  class="foot">
    <? require_once 'footer.php';?>
</foot>
</body>

</html>


<?


?>