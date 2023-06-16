<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Aula Prática 9 – Exercício prático POO em PHP</title>
</head>
<body>
<section>
        <pre>
        <?php
    
        require_once "../classes/Pessoa.php";
        require_once "../classes/Publicacao.php";

        // requisição de pessoa
        $listaPessoas = [];
        $listaPessoas[0] = new Pessoa("Gustavo", 20, "M");
        $listaPessoas[1] = new Pessoa("Joao", 28, "M");


        //requisição de livros
        $listaLivros = [];
        $listaLivros[0] = new Livro("O selo perdido", "Robert Zane", 725, $listaPessoas[0]->getNome());
        $listaLivros[1] = new Livro("Minha morada", "Daniel Hardman", 532, $listaPessoas[1]->getNome());
        

        $listaLivros[0]->abrir();
        $listaLivros[0]->folhear(200);
        $listaLivros[0]->avancarPag();
        $listaLivros[0]->detalhes();

        $listaLivros[1]->abrir();
        $listaLivros[1]->avancarPag();
        $listaLivros[1]->detalhes();
        
        ?>
        </pre>
</section>

</body>
</html>