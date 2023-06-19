<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 12 – Polimorfismo em PHP (Parte 1)</title>
</head>
<body>
    <section>

    <?php 
    
    require_once "../classes/Mamifero.php";
    require_once "../classes/Reptil.php";
    require_once "../classes/Peixe.php";
    require_once "../classes/Ave.php";

    echo "<hr> Mamifero";
    $m = new Mamifero();
    $m->locomover();
    $m->alimentar();
    $m->emitirSom();
    echo "<hr> Reptil";
    $r = new Reptil();
    $r->locomover();
    $r->alimentar();
    $r->emitirSom();
    echo "<hr> Peixe";
    $p = new Peixe();
    $p->alimentar();
    $p->emitirSom();
    $p->locomover();
    $p->soltarBolhas();
    echo "<hr> Ave";
    $a = new Ave();
    $a->alimentar();
    $a->emitirSom();
    $a->locomover();
    $a->fazerNinho();

    ?>

    </section>
</body>
</html>