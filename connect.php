<?php

class connect
{
    private $db_con;

    public function __construct($hostname, $username, $password, $dbname)
    {
        $this->db_con = mysqli_connect($hostname,$username,$password,$dbname);
    }

    public function auth($login)
    {
    $query= mysqli_query($this->db_con,"SELECT `Login`, `Password` FROM `Users` WHERE `Login` = '$login'");
    $user=mysqli_fetch_all($query, MYSQLI_ASSOC);
        if ($user['0']['Password'] === md5($_POST['password'])) {
            echo $_POST['login'], ", добро пожаловать!";
        } else {
            echo "Вы ввели неправильный логин/пароль";
        }
    }
}


