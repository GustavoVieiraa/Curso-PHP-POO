<?php 

    class Pessoa {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        // metodo construtor
        function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }

        // Metodo
        public function fazerAniversario() {
            $this->setIdade($this->getIdade()+1);            
        }

        public function apresentar() {
            echo "<hr>nome: ".$this->getNome();
            echo "<br>idade: ".$this->getIdade();
            echo "<br>sexo: ".$this->getSexo();
        }

        // Metodos especiais
        // nome
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        // idade
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        // sexo
        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }
    }

?>