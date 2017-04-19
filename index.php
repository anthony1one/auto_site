<?php
    $content = nl2br(file_get_contents($_SERVER['DOCUMENT_ROOT']."/content/main.txt"));
?>

<html>
    <head>
        <link rel="stylesheet" href="styles/styles.css">
        <title>Главная</title>
        <meta charset="utf8">
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

        <h1 align="center">Добро пожаловать!</h1>

        <!-- ТЕЛО СТРАНИЦЫ -->

        <div class="body-page">
            <div class="img-body">
                <img src="/img/1.jpeg">
            </div>
            <p><?=$content?></p>
            <h2 align="center">Оставить заявку</h2>

            <form action="/handlers/send_application.php" method="post" name="form1" class="main-form">
                <div class="field">
                    <label for="name">Ваше полное имя :</label><br>
                    <input type="text" name="name" placeholder="Введите имя" required/>
                </div>
                <div class="field">
                    <label for="phone">Ваш телефон (ххх-ххх-хх-хх) :</label><br>
                    +7 <input type="tel" name="phone" placeholder="xxx-xxx-xx-xx" pattern="^\d{3}-\d{3}-\d{2}-\d{2}$" required/>
                </div>
                <div class="field">
                    <label for="email">Ваш Email :</label><br>
                    <input type="email" name="email" placeholder="Введите email" required/>
                </div>
                <div class="field">
                    <label for="topic">Тема :</label><br>
                    <select name="topic">
                        <option value="Каско">Каско</option>
                        <option value="Осаго">Осаго</option>
                        <option value="Десаго">Десаго</option>
                        <option value="Зеленая карта">Зеленая карта</option>
                    </select>
                </div>
                <div class="field">
                    <input type="submit" value="Отправить" />
                </div>
            </form>
        </div>

        <!-- ДНО СТРАНИЦЫ -->

        <footer>
            <hr>
            <span>&#169; «Мой сайт» 2к17</span>
        </footer>
    </body>
</html>