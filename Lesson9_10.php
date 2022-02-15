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
    //Задание 1

    function z1()
    {
        for($i=1; $i<=5;$i++){
            echo $arr[]=mt_rand(1,10). "<br>";
        }
        return $arr;
    }
    $a= z1();
    echo '<br>';
    //задание 2
    $str1= 'HTML, CSS, PHP, BITRIX';
    function z2($str1){
        echo 'Количество слов в строке:', ' ' , str_word_count($str1);
    }
    z2($str1);
    echo '<br>','<br>';
    //Задание 3
    function z3($str1){
        $str = strrev($str1);
        echo $str;
    }
    z3($str1);
    echo '<br>','<br>';
    //Задание 4
    function z4($str1){
        $str=mb_strlen($str1);
        echo 'Длина строки:', ' ' ,$str;
    }
    z4($str1);
    echo '<br>','<br>';
    //Задание 5
    function z5($str1){
        $str= mb_str_split($str1);
        foreach ($str as $value){;
        echo $value, '<br>';}
    }
    z5($str1);
    echo '<br>','<br>';
    ?>
</main>
<foot  class="foot">
    <? require_once 'footer.php';?>
</foot>
</body>
</html>


