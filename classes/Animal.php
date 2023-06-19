<?php 

    abstract class Animal {

        protected $peso;
        protected $idade;
        protected $membros;

        abstract function locomover(); 
        abstract function alimentar();
        abstract function emitirSom();

    }

?>