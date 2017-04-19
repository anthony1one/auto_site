<?php
require $_SERVER['DOCUMENT_ROOT']. "/lib/functions.php";

$content = getContentPage(returnFileName(basename(__FILE__)));
?>

<html>
    <head>
        <link rel="stylesheet" href="styles/styles.css">
        <title>Десаго</title>
    </head>
    <body>

        <!-- ЗАГОЛОВОК СТРАНИЦЫ -->
        <div class="logo">
            <a href="index.php">
                <img src="/img/logo.png" height="100" width="100" style="margin-left: 30px">
            </a>
        </div>

        <!-- МЕНЮ НАВИГАЦИИ -->

        <ul id="menu-site">
            <li class="menu-site-elem"><a href="/">Главная</a></li>
            <li class="menu-site-elem"><a href="cascoPage.php">Каско</a></li>
            <li class="menu-site-elem"><a href="osagoPage.php">Осаго</a></li>
            <li class="menu-site-elem"><a href="desagoPage.php">Десаго</a></li>
            <li class="menu-site-elem"><a href="greenCardPage.php">Зеленая карта</a></li>
            <li class="menu-site-elem"><a href="about.php">О нас</a></li>
        </ul>

        <h1 align="center">Десаго</h1>

        <!-- ТЕЛО СТРАНИЦЫ -->

        <div class="body-page">
            <div class="img-body">
                <img src="/img/1.jpeg">
            </div>
            <p><?=$content?></p>
        </div>

        <!-- ДНО СТРАНИЦЫ -->

        <footer>
            <hr>
            <span>&#169; «Мой сайт» 2к17</span>
        </footer>
    </body>
</html>