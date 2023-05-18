<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 3 – Configurando Visibilidade de Atributos e Métodos</title>
</head>
<body>
    <header>
        <h1>Aula Prática 3 – Configurando Visibilidade de Atributos e Métodos</h1>
    </header>
    <section>
        <h1>Aplicando Visibilidade de Atributos e Métodos</h1>
        <pre>
        <?php 
        
        require_once '../classes/Caneta.php';
        $caneta1 = new Caneta;
        $caneta1->modelo = "BIC Diamante";
        $caneta1->cor = "Vermelha";
        // $caneta1->ponta = 0.5;
        // $caneta1->carga = 90;
        // $caneta1->tampada = false;
        print_r($caneta1);

        $caneta1->rabiscar();
        $caneta1->tampar();        
        print_r($caneta1);

        ?>
        </pre>
    </section>
</body>
</html>