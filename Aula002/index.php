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
            $c1 -> cor = "azul";
            $c1 -> ponta = 0.5;
            $c1 -> destampar();
            
            $c2 = new Caneta;
            $c2 -> cor = "Vermelha";
            $c2 -> ponta = 1;
            $c2 -> carga = 50;
            $c2 -> tampar();

            var_dump($c1);
            var_dump($c2);
        ?>
    </body>
</html>
