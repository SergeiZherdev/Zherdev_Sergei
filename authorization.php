<?php

$logins=['Сергей','Admin'];
$passwords=['a01610228fe998f515a72dd730294d87','e3afed0047b08059d0fada10f400c1e5'];//1212 , Admin
if(!empty($_POST)) {
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $_POST['password'] = md5($_POST['password']);
    if (in_array($login, $logins) && $password == $passwords[array_search($login, $logins)]) {
        $auth = true;
    } else
        $auth = false;

    if ($auth) {
        require('homework.php');
    } else echo "Введены некорректные данные, попробуйте еще раз".'<br>';
    //print_r($_POST);
}

?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Styles/Stylenew.css">
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
<form method="post">
    <p>
        <label for="name">Login</label>
        <input type="text" id="login" name="login">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </p>
    <p>
        <button type="submit">Ок</button>
    </p>
</form>
</body>
</html>
