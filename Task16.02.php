<?
if($_POST['submit']) {
    $comment =  $_POST['comment'];
    $to = '123@mail.com';
    $from= $_POST['name'];
    mail($to,$comment, 'From:'.$from);
    echo 'Спасибо! Письмо отправлено.';
}



    if($_POST['submit']){
    if(array_sum($_POST) > 15){
        echo 'У вас покладистый характер';
        }elseif (array_sum($_POST) >5 && array_sum($_POST)<15){
        echo 'Вы не лишены недостатков, но с вами можно ладить';
    }else echo 'Вашим друзьям можно посочувствовать';
}
    print_r(array_sum($_POST));
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
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="comment">Comment</label>
        <textarea name="comment" ></textarea>
    </p>
    <p>
        <input type="submit" value="Отправить" name="submit">
    </p>


    <H>Анкета "Ваш характер"</H>
    <form method="post">
    <p>
        <label for="name">Введите Ваше имя</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="name">1. Считаете ли Вы, что у многих ваших знакомых хороший характер?</label> <br>
        <input type="radio" id="radio" name="vopros1" value="0">Да
        <input type="radio" id="radio1" name="vopros1_1" value="1">Нет
    </p>
    <p>
        <label for="name">2. Раздражают ли Вас мелкие повседневные обязанности?</label> <br>
        <input type="radio" id="radio" name="vopros2" value="0">Да
        <input type="radio" id="radio1" name="vopros2_2" value="1">Нет
    </p>
        <p>
            <label for="name">3. Верите ли Вы, что ваши друзья преданы Вам?</label> <br>
            <input type="radio" id="radio" name="vopros3" value="1">Да
            <input type="radio" id="radio1" name="vopros3_3" value="0">Нет
        </p>
        <p>
            <label for="name">4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</label> <br>
            <input type="radio" id="radio" name="vopros4" value="0">Да
            <input type="radio" id="radio1" name="vopros4_4" value="1">Нет
        </p>
        <p>
            <label for="name">5. Способны ли Вы ударить собаку или кошку?</label> <br>
            <input type="radio" id="radio" name="vopros5" value="0">Да
            <input type="radio" id="radio1" name="vopros5_5" value="1">Нет
        </p>
        <p>
            <label for="name">6. Часто ли Вы принимаете лекарства?</label> <br>
            <input type="radio" id="radio" name="vopros6" value="1">Да
            <input type="radio" id="radio1" name="vopros6_6" value="0">Нет
        </p>
        <p>
            <label for="name">7. Часто ли Вы меняете магазин, в который ходите за продуктами?</label> <br>
            <input type="radio" id="radio" name="vopros7" value="0">Да
            <input type="radio" id="radio1" name="vopros7_7" value="1">Нет
        </p>
        <p>
            <label for="name">8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</label> <br>
            <input type="radio" id="radio" name="vopros8" value="0">Да
            <input type="radio" id="radio1" name="vopros8_8" value="1">Нет
        </p>
        <p>
            <label for="name">9. Тяготят ли Вас общественные обязанности?</label> <br>
            <input type="radio" id="radio" name="vopros9" value="1">Да
            <input type="radio" id="radio1" name="vopros9_9" value="0">Нет
        </p>
        <p>
            <label for="name">10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</label> <br>
            <input type="radio" id="radio" name="vopros10" value="1">Да
            <input type="radio" id="radio1" name="vopros10_10" value="0">Нет
        </p>
        <p>
            <label for="name">11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</label> <br>
            <input type="radio" id="radio" name="vopros11" value="0">Да
            <input type="radio" id="radio1" name="vopros11_11" value="1">Нет
        </p>
        <p>
            <label for="name">12. Сохранилась ли у Вас фигура по сравнению с прошлым?</label> <br>
            <input type="radio" id="radio" name="vopros12" value="0">Да
            <input type="radio" id="radio1" name="vopros12_12" value="1">Нет
        </p>
        <p>
            <label for="name">13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</label> <br>
            <input type="radio" id="radio" name="vopros13" value="1">Да
            <input type="radio" id="radio1" name="vopros13_13" value="0">Нет
        </p>
        <p>
            <label for="name">14. Нравится ли Вам семейная жизнь?</label> <br>
            <input type="radio" id="radio" name="vopros14" value="1">Да
            <input type="radio" id="radio1" name="vopros14_14" value="0">Нет
        </p>
        <p>
            <label for="name">15. Злопамятны ли Вы?</label> <br>
            <input type="radio" id="radio" name="vopros15" value="0">Да
            <input type="radio" id="radio1" name="vopros15_15" value="1">Нет
        </p>
        <p>
            <label for="name">16. Находите ли Вы, что стоит погода, типичная для данного времени года?</label> <br>
            <input type="radio" id="radio" name="vopros16" value="0">Да
            <input type="radio" id="radio1" name="vopros16_16" value="1">Нет
        </p>
        <p>
            <label for="name">17. Случается ли Вам с утра быть в плохом настроении?</label> <br>
            <input type="radio" id="radio" name="vopros17" value="0">Да
            <input type="radio" id="radio1" name="vopros17_17" value="1">Нет
        </p>
        <p>
            <label for="name">18. Раздражает ли Вас современная живопись?</label> <br>
            <input type="radio" id="radio" name="vopros18" value="0">Да
            <input type="radio" id="radio1" name="vopros18_18" value="1">Нет
        </p>
        <p>
            <label for="name">19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</label> <br>
            <input type="radio" id="radio" name="vopros19" value="1">Да
            <input type="radio" id="radio1" name="vopros19_19" value="0">Нет
        </p>
        <p>
            <button type="submit">завершить анкету</button>
        </p>
    </form>
</body>
</html>
