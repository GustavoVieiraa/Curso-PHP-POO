<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Teórica 5 – Exemplo Prático com Objetos</title>
</head>
<body>
    <header>
        <h1>Aula Teórica 5 – Exemplo Prático com Objetos</h1>
    </header>
    <section>
        <pre>
        <h1>Banco - GV</h1>
        <?php 
        
        require_once "../classes/ContaBanco.php";
        
        $contaGusta = new ContaBanco();
        $contaGusta->setNome('Gustavo Vieira');
        $contaGusta->setCpf('531.869.888-37');
        $contaGusta->setNumConta(1);
        $contaGusta->abrirConta("cc");
        $contaGusta->saqueConta(38);
        $contaGusta->mensalidadeConta();
        $contaGusta->infoConta();
        
        
        ?>
        </pre>
    </section>
</body>
</html>