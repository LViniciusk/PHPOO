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
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            $b = new Bolsista("Jeremias", 15, "M");
            $a = new Aluno("Jozias", 19, "M");

            $b->setBolsa(20);
            $b->setMatr(4002);
            $b->setCurso("Informatica");

            $a->setMatr(8922);
            $a->setCurso("Eletromecanica");


            print_r($b);
            $b->pagarMensal();
            print_r($a);
            $a->pagarMensal();
        
        
        
        ?>
    </pre>
</body>
</html>