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
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa("Joao", 18, "M");

            $l[0] = new Livro("PHP Basico", "Jeremias", 300, $p[0]);

            $l[0]->abrir();
            $l[0]->folhear(50);
            $l[0]->avancarPag();
            //$l[0]->voltarPag();
            $l[0]->folhear(300);


            print_r($l[0]);

        ?>
    </pre>
</body>
</html>