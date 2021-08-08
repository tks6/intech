<?php
function send_email() {
    if(isset($_POST['submit'])){
        $to = "abfor9-4@narod.ru";
        $from = $_POST['Email'];
        $name = $_POST['Name'];
        $smedia = $_POST['Smedia'];
        $message = $_POST['Message'];
        $subject = "Сообщение";
        $message = $name . " (" . $smedia . ") написал(а) следующее:" . "\n\n" . $_POST['Message'];
        $headers = "От:" . $from;
        mail($to,$subject,$message,$headers);
        header("Refresh:0");
    }
}
?>

    <!DOCTYPE html>
<html>
<title>Дешёвая студия веб-разработки STAROSTIN ART.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/add.css">
<link rel="stylesheet" href="css/style.css">
<script src="button.js"></script>
<body>

<div class="top">
    <div class="white shadow">
        <table width="100%" cellspacing="1">
            <tr>
                <td align="center" width="33%" height="25px"><div class=" bar-item"><div class="hide-small"><button onclick="window.location.href='http://vk.com/id400559435'" style="border:none; background: none"><b><div class="center hanim1" style="text-align: center padding-left:15px;">STAROSTIN</div><div style="text-align: center; background-color: #A66D98"; color: #3802AA"><div class="hanim2">ART.</div></div></b></div></button></td></div>
    <td align="center" width="33%" height="25px"><div class="center">
            <button onclick="window.location.href='#home'" class="bar-item button smooth ll ripple">Домой</button>
            <button onclick="window.location.href='#about'" class="bar-item button smooth ll ripple">О нас</button>
            <button onclick="window.location.href='#services'" class="bar-item button smooth  ripple">Услуги</button>
            <button onclick="window.location.href='#contact'" class="bar-item button smooth  ripple">Связаться</button>
        </div></td>
    <td align="center" width="33%" height="25px"><div class="hide-small">
            <div class="bar-item center"><a href="tel:+380714391315" style="text-decoration: none"><b>Позвонить:</b> +38 (071) 439-13-15</div></a>

        </div></td>
    </tr>
    </table>
</div>
</div>

<header class="display-container content wide" style="margin-top: 50px; max-width:1500px;" id="home">
    <img class="image" src="img/top.jpg" width="2560" height="800">
    <div class="display-middle margin-top center">
        <div style="color: white">ЩА 5 МИНУТ И СДЕЛАЮ</div>
        <h1 class="xxlarge">

            <div class="bar-block">
                <div class="purple text-black" style="padding-left: 5px"><b>STAROSTIN</b></div>
                <div class="black text-white right" style="padding-left: 5px"><b>ART.</b></div>
            </div></h1>

    </div>



</header>

<div class="display-container content wide" style="max-width:1500px;" id="about">
    <img class="image" src="img/skills.jpg" width="2560" height="800">
    <div class="display-bottommiddle margin-top margin-bottom center">
        <h1 class="xlarge">
            <div class="bar-block">
                <div class="purple text-black" style="font-style:  normal;padding-left: 5px"><b><h1>О нас:</b></div>
                <div class="white text-black right" style="padding-left: 5px">Не имея почти никакого опыта, мы поможем дёшево сделать сайт для Вас и Вашей организации в кротчайшие сроки.</div>
            </div></h1>

    </div>
</div>

<div class="display-container content wide" style="max-width:1500px;" id="services">
    <img class="image" src="img/usl.jpg" width="2560" height="1250">
    <div class="display-middle margin-top center">
        <div style="color: white">Мы предоставляем следующие услуги:</div>
        <h1 class="xxlarge">
            <div class="bar-block">
                <div class="white text-black" style="padding-left: 5px"><b><h1>Интернет-магазин</h1></b></div>
                <div class="white text-black" style="padding-left: 5px"><b><h1>Landing page</h1></b></div>
                <div class="white text-black" style="padding-left: 5px"><b><h1>Личный блог</h1></b></div>
                <div class="black text-white" style="padding-left: 15px; padding-right:  15px; padding-top: 3px; padding-bottom:3px"><b><h1>И многое-многое другое...</h1></b></div>

            </div></h1>

    </div>
</div>
<div class="content padding" style="max-width:1564px">
    <div style="margin:auto; width: 50%" id="contact">
        <h3 class="center border-bottom border-light-grey padding-16">Связаться с нами</h3>
        <form action="">
            <input class="input border" type="text" placeholder="Ваше имя" required name="Name">
            <input class="input section border" type="email" placeholder="Ваш Email" required name="Email">
            <input class="input section border" type="text" placeholder="Ссылка на Ваш профиль в соц. сети" required name="Smedia">
            <input class="input section border" type="text" placeholder="Ваше сообщение" required name="Message">
            <button class="button black section" type="submit" name="submit" value="Submit" onclick="send_email()">
                Отправить
            </button>
            <a href="http://vk.com/id_tks"><img style="height:40px; weight:40px" src="img/vk.png"></a>
            <a href="http://telegram.org"><img style="height:40px; weight: 40px" src="img/tg.png"></a>
        </form>
    </div>

</div>
<div style="height:50px"></div>
<footer class="center black padding-16">
    <p>Tks6.github.com</a></p>
</footer>
</body>
</html>
