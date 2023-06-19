<?php 

require_once "../classes/Animal.php";

    class Ave extends Animal {
        
        private $corPena;

        public function alimentar() {
            echo "<p>Comendo Frutas...</p>";
        }

        public function emitirSom() {
            echo "<p>Som de ave...</p>";
        }

        public function locomover()
        {
            echo "<p>Voando...</p>";
        }

        public function fazerNinho() {
            echo "<p>Construiu um ninho...</p>";
        }


        public function setCorPena($corPena) {
            $this->corPena = $corPena;
        }
        public function getCorPena() {
            return $this->corPena;
        }

    }

?>