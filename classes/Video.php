<?php 

    require_once "../classes/AcoesVideo.php";

    class Video implements AcoesVideo {
        
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        function __construct($titulo)
        {
            $this->setTitulo($titulo);
            $this->setAvaliacao(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        public function statusYoutube() {
            echo "<hr>Titulo: ".$this->getTitulo();
            echo "<br>Avaliação: ".$this->getAvaliacao();
            echo "<br>Views: ".$this->getViews();
            echo "<br>Curtidas: ".$this->getCurtidas();
            echo "<br>Reproduzindo: ".$this->getReproduzindo();
        }

        public function play() {
            $this->setReproduzindo(true);
        }

        public function pause() {
            $this->setReproduzindo(false);
        }

        public function like() {
            $this->setCurtidas($this->getCurtidas()+1);
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        public function getTitulo() {
            return $this->titulo;
        }

        public function setAvaliacao($avaliacao) {
            $this->avaliacao = $avaliacao;
        }
        public function getAvaliacao() {
            return $this->avaliacao;
        }

        public function setViews($views) {
            $this->views = $views;
        }
        public function getViews() {
            return $this->views;
        }

        public function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }

        public function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }
        public function getReproduzindo() {
            return $this->reproduzindo;
        }

    }

?>