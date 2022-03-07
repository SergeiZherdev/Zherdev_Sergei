<?php
require_once 'connect.php';
require_once 'Dat.php';
/*$hostname = 'localhost';
$username = 'Serg';
$password = 1;
$dbname = 'Auth';*/
$log= new connect($hostname, $username,$password,$dbname);
$result= $log->auth($_POST["login"], $_POST["password"]);


/*
$hostname= 'localhost';
$username= 'Serg';
$password= '1';
$dbname= 'Auth';
$db_con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_set_charset($db_con,"UTF-8");*/
//mysqli_query($db_con, "CREATE DATABASE $dbname");
/*mysqli_query($db_con, "CREATE Table Users(
    Id_user int NOT NULL AUTO_INCREMENT,
    Login varchar (40),
    Password varchar (40),
    PRIMARY KEY(Id_user)
)");*/
/*$logins=['Сергей','Admin'];
$passwords=['a01610228fe998f515a72dd730294d87','e3afed0047b08059d0fada10f400c1e5'];*///1212 , Admin
/*$user1= "INSERT INTO `Users`(`ID_user`, `Login`, `Password`) VALUES (NULL,'$logins[0]','$passwords[0]')";
$user2= "INSERT INTO `Users`(`ID_user`, `Login`, `Password`) VALUES (NULL,'$logins[1]','$passwords[1]')";
mysqli_query($db_con,$user1);
mysqli_query($db_con,$user2);*/
/*if ( !empty($_POST['password']) and !empty($_POST['login']) ) {
$login = $_POST['login'];
$password = $_POST['password'];
    $query = "SELECT `Login`, `Password` FROM `Users` WHERE `Login` = '$login'";
    $result = mysqli_query($db_con, $query);
    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if ($user['0']['Password'] === md5($_POST['password'])) {
        echo $_POST['login'], ", добро пожаловать!";
    } else {
        echo "Вы ввели неправильный логин/пароль";
    }
}*/
/*if(!empty($_POST)) {
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $_POST['password'] = md5($_POST['password']);
    if (in_array($login, $logins) && $password == $passwords[array_search($login, $logins)]) {
        $auth = true;
    } else
        $auth = false;

    if ($auth) {
        echo $_POST['login'],", добро пожаловать!";
        header('Refresh:3; authorization.php');
        //require('homework.php');
    } else echo "Введены некорректные данные, попробуйте еще раз".'<br>';
        header('Refresh:3; authorization.php');
    //print_r($_POST);

}
setcookie('login',$login, time()+3600*7*24);

if(count($_POST)>0){
    if($_POST['login']=='Сергей' || $_POST['password']=='a01610228fe998f515a72dd730294d87'){
        if(isset($_SESSION["page"])){
            foreach($_SESSION["page"] as $value)
            {
                echo $value;
            }
            exit;
        }
    }
    if($_POST['login']=='Admin' || $_POST['password']=='e3afed0047b08059d0fada10f400c1e5'){
        if(isset($_SESSION["page"])){
            foreach($_SESSION["page"] as $value)
            {
                echo $value;
            }
            exit;
        }
    }
}
else
{
    if (isset($_SESSION['page']))
    {
        foreach($_SESSION["page"] as $value)
        {
            echo $_COOKIE['login'], $value;
        }
    }
}*/

//session_destroy()
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
<div>
    <a href="FACT.php">Факт</a>
   </div>
<div>
    <a href="BITRIX.php">BITRIX</a>
</div>
</form>
</body>
</html>
