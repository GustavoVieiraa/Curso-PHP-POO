<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 14 – Projeto Final em PHP (Parte 1)</title>
</head>
<body>
    <section>
        <?php
        
        require_once "../classes/Gafanhoto.php";
        require_once "../classes/Video.php";

        $gusta = new Gafanhoto("Gustavo Vieira", 21, "M");
        $gusta->viuMaisUm();
        $gusta->ganharExp();
        $gusta->status();

        
        $youtube = new Video("Curso em Vídeo - PHP", 9.5, 0, 0, false);
        $youtube->play();
        $youtube->pause();
        $youtube->play();
        $youtube->like();
        $youtube->statusYoutube();
            
        ?>
    </section>
</body>
</html>