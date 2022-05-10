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
            $v[0] = new Video("Video00");
            $v[1] = new Video("Video01");
            $v[2] = new Video("Video02");
            
            print_r($v);

            $p[0] = new Espectador("jeremias", 19, "M", "jeremias123");

            print_r($p);
            
        ?>

    </pre>
</body>
</html>