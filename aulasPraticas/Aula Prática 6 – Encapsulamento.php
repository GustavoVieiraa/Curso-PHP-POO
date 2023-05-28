<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 6 – Encapsulamento</title>
</head>
<body>
    <section>
        <h1>Encapsulamento</h1>
        <?php
        

        require_once "../classes/ControleRemoto.php";
        $controle = new ControleRemoto();
        $controle->ligar();
        $controle->play();
        $controle->abrirMenu();
        ?>
    </section>
</body>
</html>