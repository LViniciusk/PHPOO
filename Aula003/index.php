<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1 -> modelo = "BIC cristal";
            $c1 -> cor = "Azul";
            $c1 -> tampar();
            
            var_dump($c1);
            

        ?>
    </body>
</html>
