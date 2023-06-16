<?php 

require_once "../classes/PessoaPadrao.php";

class Funcionario extends PessoaPadrao {
    private $setor;
    private $trabalhando;

    public function statusFuncionario() {
        echo "<hr>Nome: ".$this->getNome()."<br>";
        echo "Idade: ".$this->getIdade()."<br>";
        echo "Sexo:".$this->getSexo()."<br>";
        echo "Setor: ".$this->getSetor()."<br>";
        echo "Trabalhando: ".$this->getTrabalhando()."<br>";
    }

    public function mudarTrabalho($novoSetor) {
        $this->setSetor($novoSetor);
    }
    // setor
    public function getSetor() {
        return $this->setor;
    }
    public function setSetor($setor) {
        $this->setor = $setor;
    }
    // trabalhando
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    } 
}

?>