<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 8 – Agregação entre Objetos em PHP</title>
</head>
<body>
    <section>
        
    <?php 

        require_once '../classes/Lutador.php';
        require_once '../classes/Luta.php';

        # Instaciamento
        $listaLutadores = [
            $lutadorGusta = new Lutador("Gustavo", "Brasileiro", 20, 1.72, 75, 0, 0, 0),
            $lutadorJonata = new Lutador("Jonata", "Russo", 23, 1.80, 60, 0, 0, 0),
            $lutadorBeto = new Lutador("Beto", "Colombiano", 27, 1.74, 120, 0, 0, 0),
            $lutadorRicardo = new Lutador("Ricardo", "Argentino", 59, 1.89, 88, 0, 0, 0,)
        ];   

        # Chamada de functions/metodos
        $lutaOficial = new Luta();
        $lutaOficial->marcarLuta($lutadorBeto, $lutadorRicardo);
        $lutaOficial->lutar();
        


    ?>
    </section>
</body>
</html>