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
            require_once 'Lutador.php';
            $L = array();
            $L[0] = new Lutador("Joao", "França", 31, 1.75, 68.9, 11, 3, 1);
            $L[1] = new Lutador("Jeremias", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $L[2] = new Lutador("Jorge", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $L[3] = new Lutador("Lucas", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $L[4] = new Lutador("Luiz", "Japão", 31, 1.75, 68.9, 11, 3, 1);
            $L[5] = new Lutador("Pedro", "Africa", 31, 1.75, 68.9, 11, 3, 1);
            print_r($L)
        ?>
    </pre>
</body>
</html>