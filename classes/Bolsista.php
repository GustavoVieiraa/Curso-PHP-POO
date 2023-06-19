<?php 

require_once "../classes/Aluno.php";

    class Bolsista extends Aluno {
        
        private $bolsa;

        public function renovarBolsa() {
            echo "<br>Bolsa renovada!";            
        }

        public function pagarMensalidade() {
            echo "<br>".$this->getNome()." é bolsista! Então paga com desconto!";
        }

    }

?>