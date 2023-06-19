<?php 

require_once "../classes/Animal.php";

    class Peixe extends Animal {

        private $corEscama;
        
        public function locomover()
        {
            echo "<p>Nadando...</p>";
        }

        public function alimentar()
        {
            echo "<p>Comendo ração...</p>";
        }

        public function emitirSom()
        {
            echo "<p>Emitindo som de peixe...</p>";
        }

        public function soltarBolhas() {
            echo "<p>Soltando bolhas...</p>";
        }


        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }

    }

?>