<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Lutador.php";

        $l = array();

        $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1)
        $l[1] = new Lutador("Bad Boy", "Japão", 29, 1.75, 89.9, 12, 3, 17)

        $luta = new Luta();
        $luta.marcarLuta($l[0], $l[1]);
        $luta.lutar();
    ?>
</body>
</html>