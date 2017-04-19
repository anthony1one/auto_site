<?php
require $_SERVER['DOCUMENT_ROOT']. "/lib/functions.php";

$content = getContentPage(returnFileName(basename(__FILE__)));
?>

<html>
    <head>
        <link rel="stylesheet" href="styles/styles.css">
        <title>Осаго</title>
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

        <h1 align="center">Осаго</h1>

        <!-- ТЕЛО СТРАНИЦЫ -->

        <div class="body-page">
            <div class="img-body">
                <img src="/img/1.jpeg">
            </div>
            <p><?=$content?></p>
            <div class="calc-part">
                <a href="javascript://" class="button" onclick="_open( '/calc.php', 600, 600);">Калькулятор ОСАГО</a>
            </div>
        </div>

        <!-- ДНО СТРАНИЦЫ -->

        <footer>
            <hr>
            <span>&#169; «Мой сайт» 2к17</span>
        </footer>
        <script type="text/javascript">
            function _open( url, width, height ) {
                window.open( url, '', 'width=' + width + ',height=' + height + ',left=' + ((window.innerWidth - width)/2) + ',top=' + ((window.innerHeight - height)/2) );
            }
        </script>
    </body>
</html>