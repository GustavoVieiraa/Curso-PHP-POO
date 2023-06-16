<?php 

require_once "../classes/Livro.php";

interface Publicacao {
    
    public function abrir();
    public function fechar();
    public function folhear($pag);
    public function avancarPag();
    public function voltarPag();

}

?>