<?php

    class Lutador {

        // atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        
        // metodo construtor

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
        {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        // metodos
        public function apresentar() {
                echo "<pre> Nome: $this->nome <br> Nacionalidade: $this->nacionalidade <br> Idade: $this->idade <br> Altura: $this->altura <br> Peso: $this->peso <br> Categoria: $this->categoria <br> Vitorias: $this->vitorias <br> Derrotas: $this->derrotas <br> Empates: $this->empates </pre>";
        }

        public function status() {
            echo "
            <br>=-------------- STATUS --------------=<br> 
            $this->nome<br>
            é um peso, <strong>$this->categoria</strong> <br>
            $this->vitorias - Vitorias <br>
            $this->derrotas - Derrotas <br>
            $this->empates - Empates
            <br>=------------------------------=<br>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias()+1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas()+1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates()+1);
        }

        // metodos especiais
        # Nome
        public function getNome() {
            return $this->nome;
        }
        public function setNome($n) {
            $this->nome = $n;
        }

        # Nacionalidade
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function setNacionalidade($nac) {
            $this->nacionalidade = $nac;
        }

        # Idade
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }

        # Altura
        public function getAltura() {
            return $this->altura;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }

        # Peso
        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria($this->peso);
        }

        # Categoria
        public function getCategoria() {
            return $this->categoria;
        }
        public function setCategoria($peso) {
            if ($peso<52.2) {
                $this->categoria = 'invalido';
            } else if ($peso<=70.3) {
                $this->categoria = 'leve';
            } else if ($peso<=83.9) {
                $this->categoria = 'medio';
            } else if ($peso<=120.2) {
                $this->categoria = 'pesado';
            } else {
                $this->categoria = 'invalido';
            }
        }

        # Vitorias
        public function getVitorias() {
            return $this->vitorias;
        }
        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        # Derrotas
        public function getDerrotas() {
            return $this->derrotas;
        }
        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        # Empates
        public function getEmpates() {
            return $this->empates;
        }
        public function setEmpates($empates) {
            $this->empates = $empates;
        }
    }
    
?>