<?php

require_once "../classes/Pessoa.php";
require_once "../classes/Publicacao.php";

    class Livro implements Publicacao {
        // Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // metodo Construtor
        function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setLeitor($leitor);
            $this->setAberto(false);
            $this->setPagAtual(0);
        }

        // metodo
        public function detalhes() {
            echo "<hr>Livro <strong>".$this->getTitulo()."</strong> escrito por ".$this->getAutor();
            echo "<br> Páginas: ".$this->getTotPaginas();
            echo "<br> Página atual: ".$this->getPagAtual();
            echo "<br> Sendo lido por: ".$this->getLeitor();
        }
        
        public function abrir() {
            if ($this->getAberto()) {
                echo "Livro já está aberto";
            } else {
                $this->setAberto(true);
            }
        }
    
        public function fechar() {
            if ($this->getAberto()) {
                $this->setAberto(false);
            } else {
                echo "Livro já está fechado";
            }
        }
    
        public function folhear($pag) {
            if ($this->getAberto() && $pag > $this->getTotPaginas()) {
                echo "Não é possível";
            } else {
                $this->setPagAtual($pag);
            }
        }

        public function avancarPag() {
            if ($this->getAberto()) {
                $this->setPagAtual($this->getPagAtual()+1);
            } else {
                echo "Livro está fechado";
            }
        }
    
        public function voltarPag() {
            if ($this->getAberto()) {
                $this->setPagAtual($this->getAberto()-1);
            } else {
                echo "Livro está fechado";
            }
        }

        // metodos especiais
        // titulo
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        // autor
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($autor) {
            $this->autor = $autor;
        }
        // totPaginas
        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        // pagAtual
        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        // aberto
        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        // leitor
        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
        

    }

?>