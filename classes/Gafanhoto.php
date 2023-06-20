<?php 

    require_once "../classes/PessoaFim.php";

    class Gafanhoto extends PessoaFim {

        private $login;
        private $totAssistido;

        public function status() {
            echo "<hr>nome: ".$this->getNome();
            echo "<br>idade: ".$this->getIdade();
            echo "<br>sexo:".$this->getSexo();
            echo "<br>Views: ".$this->getTotAssistido();
            echo "<br>Experiencia: ".$this->getExperiencia();
        }

        public function viuMaisUm() {
            $this->setTotAssistido($this->getTotAssistido()+1);
        }

        public function setLogin($login) {
            $this->login = $login;
        }
        public function getLogin() {
            return $this->login;
        }

        public function setTotAssistido($totAssistido) {
            $this->totAssistido = $totAssistido;
        }
        public function getTotAssistido() {
            return $this->totAssistido;
        }

    }


?>