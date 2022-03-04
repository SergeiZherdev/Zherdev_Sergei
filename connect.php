<?php

class connect
{
    public $hostname;
    public $username;
    public $password;
    public $dbname;

    public function __construct($hostname, $username, $password, $dbname)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }
    /*public function db_connect()
    {
        mysqli_connect('localhost', 'Serg', 1, 'Auth');
    }*/
    public function auth1(){

    }
}
  // public $login;
  // public $password1;

