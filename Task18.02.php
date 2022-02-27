<?php
$color = $_POST['color'];
setcookie('color',$color, time()+3600*7*24);
if($_COOKIE["color"] == 1){
echo('<body style="background-color: blue">');
}
if($_COOKIE["color"] == 2){
echo('<body style="background-color: darkred">');
}
if($_COOKIE["color"] == 3){
echo('<body style="background-color: gold">');
}
session_start();
$_SESSION['login']= $_POST['name'];
if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}
echo time() - $_SESSION['time'];
echo '<br>';
$_SESSION['time2']=date('h:i:s');
echo $_SESSION['time2'];
?>
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
<form action="" method="post">
    <select name="color" >
        <option value="0">Выберите цвет</option>
        <option value="1">Синий</option>
        <option value="2">Красный</option>
        <option value="3">Желтый</option>
    </select>
    <p>
        <button type="submit">Выбрать цвет</button>
    </p>
    <form action=""method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <a href="Hello.php">Hello</a>
</body>
</html>
