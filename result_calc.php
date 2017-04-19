<?php
session_start();
?>
<html>
    <head>
        <title>Итог</title>
    </head>
    <body>
        <h1>Примерная цена: <b><?=number_format((float)$_SESSION['total'], 2, '.', '')?></b></h1>
        <?php
        session_unset();
        ?>
    </body>
</html>