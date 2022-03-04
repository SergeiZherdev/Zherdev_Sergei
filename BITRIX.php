<?
session_start();
$index2="В последний раз ты был на BITRIX";
$_SESSION["page"]=array();
$_SESSION["page"][]=$index2;
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
<H1>Сайт BITRIX</H1>
<div>
    <a href="FACT.php">Факт</a>
</div>
<div>
    <a href="authorization.php">Страница авторизации</a>
    </div>
</body>
</html>
