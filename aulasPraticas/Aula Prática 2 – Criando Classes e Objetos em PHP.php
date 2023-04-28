<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Criando Classes e Objetos em PHP</title>
</head>
<body>
    <section>
        <?php 
            require_once '../classes/Caneta.php';
            $caneta1 = new Caneta();
            $caneta1->cor = "Rosa";
            $caneta1->ponta = 0.7;
            $caneta1->carga = 70;
            $caneta1->modelo = 'BIC';
            $caneta1->tampada = false;
            $caneta1->tampar(); echo "<br>";
            $caneta1->rabiscar(); echo "<br>";
            $caneta1->eNova();
            print_r($caneta1);

            $caneta2 = new Caneta();
            $caneta2->cor = "Azul";
            $caneta2->ponta = 0.7;
            $caneta2->carga = 100;
            $caneta2->modelo = 'BIC';
            $caneta2->tampada = true;
            $caneta2->rabiscar(); echo "<br>";
            $caneta2->eNova(); echo "<br>";
            print_r($caneta2)
        ?>
    </section>
</body>
</html>