<?php 

    require_once "../classes/Animal.php";

    class Reptil extends Animal {

        private $corEscama;

        public function locomover()
        {
            echo "<p>Rastejando</p>";
        }

        public function alimentar()
        {
            echo "<p>Comendo Vegetais</p>";
        }

        public function emitirSom()
        {
            echo "<p>Som de Reptil</p>";
        }


        public function getCorEscama() {
            $this->corEscama;
        }
        public function setCorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }
    }


?>