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
        require_once "ContaBanco.php";
        $p = new ContaBanco();
        $p2 = new ContaBanco();

        $p->abrirConta("CC");
        $p->setDono("Maria");
        $p->setNumConta("998766554");

        $p->abrirConta("CC");
        $p->setDono("Alexander");
        $p->setNumConta("998766554");

        $p->depositar(250);
        $p2->depositar(116);

        $p->pagarMensal();
        $p2->pagarMensal();

        $p->sacar(999);
        $p2->sacar(1234);

        print_r($p);
        print_r($p2);
    ?>
</body>
</html>