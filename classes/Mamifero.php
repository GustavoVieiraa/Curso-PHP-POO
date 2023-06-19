<?php 

    require_once "../classes/Animal.php";

    class Mamifero extends Animal {
 
        protected $corPelo;

        public function locomover() {
            echo "<p>Correndo...</p>";
        }

        public function alimentar() {
            echo "<p>Mamando...</p>";
        }

        public function emitirSom() {
            echo "<p>Som de Mamifero...</p>";
        }

        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($corPelo) {
            $this->corPelo = $corPelo;
        }

    }

?>