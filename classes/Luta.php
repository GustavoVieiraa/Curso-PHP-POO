<?php

require_once "../classes/Lutador.php";

class Luta {
    # Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    # metodos especiais
    # Desafiado
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    # Desafiante
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    # Rounds
    public function getRounds() {
        return $this->rounds;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    # Aprovada
    public function getAprovada() {
        return $this->aprovada;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    # metodos
    public function marcarLuta($lutador1, $lutador2) {
        if ($lutador1->getCategoria() == $lutador2->getCategoria()
        && $lutador1 != $lutador2) {
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: // Empate
                    echo "Empatou!";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    $this->desafiado->apresentar();
                    $this->desafiante->apresentar();
                    break;
                case 1: // Desafiado ganha luta (Lutador1)
                    echo $this->desafiado->getNome()." ganhou a luta!";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    $this->desafiado->apresentar();
                    $this->desafiante->apresentar();
                    break;
                case 2: // Desafiante ganha luta (Lutador2)
                    echo $this->desafiante->getNome()." ganhou a luta!";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    $this->desafiado->apresentar();
                    $this->desafiante->apresentar();
                    break;
                }
        } else {
            echo "<p>Essa luta não pode acontecer!</p>";
        }
    }

}


?>