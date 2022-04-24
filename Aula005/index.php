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
            require_once "ContaBanco.php";

            //Criação das contas
            $p1 = new ContaBanco(); //Jubilas
            $p2 = new contaBanco(); //Creuza
        
            $p1->abrirConta("CC");
            $p1->setNumConta(1111);
            $p1->setDono("Jubilas");

            $p2->abrirConta("CP");
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");



            //Ações

            $p1->depositar(300);

            $p2->depositar(500);
            $p2->sacar(100);

            //Verificar
            print_r($p1);
            print_r($p2);
        
        ?>
    </pre>
</body>
</html>