<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("BIC", "Vermelho", 0.7);

            var_dump($c1);
        ?>
    </body>
</html>
