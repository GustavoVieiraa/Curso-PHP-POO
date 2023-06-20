<?php

    abstract class PessoaFim {
        
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        public function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);
            $this->setSexo($sexo);
            $this->setIdade($idade);
            $this->setExperiencia(0);
        }

        public function ganharExp() {
            $this->setExperiencia($this->getExperiencia()+1);
        }


        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getNome() {
            return $this->nome;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function getIdade() {
            return $this->idade;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }
        public function getSexo() {
            return $this->sexo;
        }

        public function setExperiencia($experiencia) {
            $this->experiencia = $experiencia;
        }
        public function getExperiencia() {
            return $this->experiencia;
        }

    }


?>