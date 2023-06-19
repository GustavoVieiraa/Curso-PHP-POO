<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 11 – Herança (Parte 2)</title>
</head>
<body>
    <section>
        <h1>Herança</h1>
        <?php 


        require_once "../classes/Requires.php";

        # Uma classe abstract não pode ser instanciada, somente suas heranças.
        // $teste = new Pessoa("Gustavo", 20, "Masculino");

        $bolsista = new Bolsista("Gustavo", 25, "M");
        $bolsista->setMatricula(1542);
        $bolsista->setCurso("Análise e Desenvolvimento de Sistemas");
        $bolsista->statusAluno();
        $bolsista->pagarMensalidade();
        $bolsista->renovarBolsa();
        ?>
    </section>
</body>
</html>