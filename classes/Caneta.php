<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // Construct
    public function Caneta($m, $c, $p) // Método Construtor
    {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->tampar();
    }


    //Tampar
    public function tampar() {
        $this->tampada = true;
    }
    //Destampar
    public function destampar() {
        $this->tampada = false;
    }
    // Modelo
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    // Cor
    public function getCor() {
        return $this->cor;
    }
    public function setCor($c) {
        $this->cor = $c;
    }
    // Ponta
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }

}
