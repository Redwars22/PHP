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
        require_once "Pessoa.php";

        $leitor = new Pessoa("Matheus", 22, "masculino");
        $livro = new Livro("A última Noite", "Mark Johansen", 355, $leitor)
    ?>
</body>
</html>