<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 4 – Métodos Getter, Setter e Construtor</title>
</head>
<body>
    <header>
        <h1>Aula Prática 4 – Métodos Getter, Setter e Construtor</h1>
    </header>
    <section>
        <pre>
        <?php 
        
        require_once "../classes/Caneta.php";

        $c1 = new Caneta("BIC", "Azul", 0.5);
        print_r($c1);

        $c2 = new Caneta("NIC", "Preta", 0.8);
        print_r($c2);

        $c3 = new Caneta("GIC", "Vermelha", 0.2);
        print_r($c3);

        /* echo "Eu tenho uma caneta {$c1->getModelo()} da cor {$c1->getCor()} 
        com uma ponta {$c1->getPonta()} <br>"; */

        
        ?>

        </pre>
    </section>
</body>
</html>