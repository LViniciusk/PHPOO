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
            require_once 'Video.php';
            require_once 'Espectador.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video("Video00");
            $v[1] = new Video("Video01");
            $v[2] = new Video("Video02");
            

            $p[0] = new Espectador("jeremias", 19, "M", "jeremias123");


            $f[0] = new Visualizacao($p[0], $v[0]);
            $f[0]->avaliarN(10);

            print_r($f[0]);


        ?>

    </pre>
</body>
</html>