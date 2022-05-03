<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamiferos/Mamifero.php';
            require_once 'Repteis/Reptil.php';
            require_once 'Peixes/Peixe.php';
            require_once 'Aves/Ave.php';

            $m = new Mamifero(80.5, 2, 4);
            $m->setCorPelo("Preto");
            print_r($m);

            $m->locomover();
            $m->alimentar();
            $m->emitirSom();

            $r = new Reptil(20, 3, 4);
            $r->setCorEscama("Verde");
            print_r($r);

            $r->locomover();
            $r->alimentar();
            $r->emitirSom();


        ?>
    </pre>
</body>
</html>