

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
    //задание №1
    function z1()
    {
        for ($a = 5; $a <= 13; $a++) {
            echo $a;
            echo '<br>';
        }
    }
    z1();
    echo '<br>';
    //Задание №2
    $num = 1000;
    $n = 0;
    function z2($num,$n)
    {
        while ($num >= 50) {
            $num /= 2;
            $n++;
        }
        echo "Результат деления: $num", '<br>';
        echo "Количество итераций: $n", '<br>';
    }
    z2($num,$n);
    echo '<br>';

    $n1 = 0;
    function z2_2($n1)
    {
        for ($num1 = 1000; $num1 > 50; $num1 /= 2) {
            $n1++;
        }
        echo "Результат деления: $num1", '<br>';
        echo "Количество итераций: $n1", '<br>';
    }
    z2_2($n1);
    echo '<br>';
//Задание 3
    $i= 1;
    function z3($i)
    {
        switch ($i) {
            case '0':
                echo "0,1,2,3,4,5,6,7,8,9,10";
                break;
            case '1':
                echo "0,1,2,3,4,5,6,7,8,9";
                break;
            case '2':
                echo "0,1,2,3,4,5,6,7,8";
                break;
            case '3':
                echo "0,1,2,3,4,5,6,7";
                break;
            case '4':
                echo "0,1,2,3,4,5,6";
                break;
            case '5':
                echo "0,1,2,3,4,5";
                break;
            case '6':
                echo "0,1,2,3,4";
                break;
            case '7':
                echo "0,1,2,3";
                break;
            case '8':
                echo "0,1,2";
                break;
            case '9':
                echo "0,1";
                break;
            case '10':
                echo "0";
                break;
        }
    }
z3($i);
    echo '<br>';
    ?>

</main>

<foot  class="foot">
    <? require_once 'footer.php';?>
</foot>
</body>

</html>


<?


?>