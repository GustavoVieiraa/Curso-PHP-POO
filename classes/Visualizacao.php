<?php 

    require_once "../classes/Gafanhoto.php";
    require_once "../classes/Video.php";

    class Visualizacao {

        private $espectador;
        private $filme;

        public function __construct($espectador, $filme)
        {
            $this->setEspectador($espectador);
            $this->setFilme($filme);
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
            
        }

        public function setEspectador($espectador) {
            $this->espectador = $espectador;
        }
        public function getEspectador() {
            return $this->espectador;
        }

        public function setFilme($filme) {
            $this->filme = $filme;
        }
        public function getFilme() {
            return $this->filme;
        }

    }

?>