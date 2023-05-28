<?php 

    require_once "../classes/Controlador.php";

    class ControleRemoto implements Controlador {
        // Atributos
        private $volume;
        private $ligado;
        private $tocando;
        // Metodo Construtor
        public function __construct() {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        // Metodos Controlador
        public function ligar() {
            if ($this->getLigado() == false) {
                $this->setLigado(true);
            } else {
                "|LG| Já está ligado!";
            }
        }
        public function desligar() {
            if ($this->getLigado() == true) {
                $this->setLigado(false);
            } else {
                "|LG| Já está desligado!";
            }
        }
        public function abrirMenu() {
            if ($this->getLigado() == true) {
                echo "------------- MENU ------------- <br>";
                echo $this->getLigado()?"|LG| Ligado: SIM <br>":"|LG| Ligado: NÃO <br>";
                echo $this->getTocando()?"|LG| Tocando: SIM":"|LG| Tocando: NÃO";
                echo "<br>|LG| Volume: ".$this->volume." = ";
                for ($i=0; $i<$this->getVolume(); $i+=10) {
                    echo " | ";
                }
                echo "<br>";
            } else {
                echo "Não é possível abrir o Menu.";
            }
        }
        public function fecharMenu() {
            echo "<br> Fechando Menu...";   
        }
        public function maisVolume() {
            if ($this->getLigado() == true) {
                $this->setVolume($this->getVolume() + 5);
            } else {
                echo "|LG| Televisão desligada";
            }
        }
        public function menosVolume() {
            if ($this->getLigado() == true) {
                $this->setVolume($this->getVolume() - 5);
            } else {
                echo "|LG| Televisão desligada";
            }
        }
        public function ligarMudo() {
            if ($this->getLigado() == true && $this->getVolume() > 0) {
                $this->setVolume(0);
                echo "Mudo Ativado!";
            } else {
                echo "Não foi possível ativar o mudo!";
            }
        }
        public function desligarMudo() {
            if ($this->getLigado() == true && $this->getVolume() == 0) {
                $this->setVolume(50);
                echo "Mudo Desligado!";   
            } else {
                echo "Não foi possível desativar o mudo!";
            }
        }
        public function play() {
            if ($this->getLigado() == true && $this->getTocando() == false) {
                $this->setTocando(true);
            } else {
                echo "Não é possível tocar!";
            }
        }
        public function pause() {
            if ($this->getLigado() == true && $this->getTocando() == true) {
                $this->setTocando(false);
                echo "Conteúdo Pausado!";
            }
        }


        // Metodos Especiais
        // volume
        private function setVolume($vol) {
            $this->volume = $vol;
        }
        private function getVolume() {
            return $this->volume;
        }
        // ligado
        private function setLigado($lig) {
            $this->ligado = $lig;
        }
        private function getLigado() {
            return $this->ligado;
        }
        // tocando
        private function setTocando($toc) {
            $this->tocando = $toc;
        }
        private function getTocando() {
            return $this->tocando;
        }

    };

?>