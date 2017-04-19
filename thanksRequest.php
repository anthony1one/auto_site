<?php
session_start();
header("refresh: 3; url=index.php")
?>

<html>
    <head>
        <link rel="stylesheet" href="styles/styles.css">
        <title>Спасибо</title>
    </head>
    <body>

        <!-- ЗАГОЛОВОК СТРАНИЦЫ -->

        <h1 align="center">Уважаемый <?=$_SESSION['name']?>!</h1>
        <h2 align="center">Спасибо за ваш запрос, наш менеджер свяжется с вами.</h2>
        <h3 align="center">Через некоторое время вы будете перенаправленны на главную странницу</h3>

        <?php session_unset(); ?>

    </body>
</html>