<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não é possível rabiscar! Sua caneta está tampada.";
        } else {
            echo "<p>Estou rabiscando o HTML5 &copy;</p>";
        }
        
    }

    private function eNova() {
        if ($this->carga == 100) {
            echo "Caneta nova!";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}
