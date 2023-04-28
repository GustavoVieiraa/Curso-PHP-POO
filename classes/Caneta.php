<?php



class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não é possível rabiscar! Sua caneta está tampada.";
        } else {
            echo "<p>Estou rabiscando o HTML5 &copy;</p>";
        }
        
    }

    function eNova() {
        if ($this->carga == 100) {
            echo "Caneta nova!";
        }
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }
}
