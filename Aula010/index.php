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
            require_once 'Aluno.php';
            require_once 'Professor.php';
            $p[1] = new Aluno("joao", 15, "M");
            $p[1]->setMatr(40028922);
            $p[1]->setCurso("Fisica");

            $p[1]->cancelarMatricula();

            $p[0] = new Professor("Jeremias", 25, "M");
            $p[0]->setSalario(1200);
            $p[0]->setEspecialidade("Matematica");

            $p[0]->receberAum(500);
            print_r($p);
        
        
        
        ?>
    </pre>
</body>
</html>