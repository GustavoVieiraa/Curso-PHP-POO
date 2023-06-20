<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 15 – Projeto Final em PHP (Parte 2)</title>
</head>
<body>
    <section>
        <pre>
        <?php 
        
            require_once "../classes/Video.php";
            require_once "../classes/Gafanhoto.php";
            require_once "../classes/Visualizacao.php";

            $v[0] = new Video("Aula 1 de PHP - POO");
            $v[1] = new Video("Aula de JavaScript");
            $v[2] = new Video("Principio de Zabbix/Grafana");

            $g[0] = new Gafanhoto("Gusta", 20, "M");
            $g[1] = new Gafanhoto("Douglas", 35, "M");
            $g[2] = new Gafanhoto("Fernanda", 24, "F");


            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[1] = new Visualizacao($g[0], $v[1]);
            $vis[2] = new Visualizacao($g[2], $v[2]);

            print_r($vis);

            echo "<hr>";

            print_r($v);
            
            echo "<hr>";

            print_r($g);

            echo "<hr>";

        ?>
        </pre>
    </section>
</body>
</html>