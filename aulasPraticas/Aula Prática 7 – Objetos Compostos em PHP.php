<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 7 – Objetos Compostos em PHP</title>
</head>
<body>
    <section>
          
        <?php 

        require_once '../classes/Lutador.php';
        
        # Instaciamento
        $listaLutadores = [
            $prettyBoy = new Lutador("Pretty boy", "França", 30, 1.75, 68.9, 11, 2, 1),
            $putScript = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3),
            $snapShadow = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1),
            $deadCode = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0 ,2),
            $ufoCobol = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3),
            $nerdaart = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4)
        ];   
   
        # Chamada de functions/metodos
        for ($key=0;$key<count($listaLutadores);$key++) {
            $listaLutadores[$key]->status();
        }
        
        ?>

    </section>
</body>
</html>