<?php

require_once "../classes/PessoaPadrao.php";

class Professor extends PessoaPadrao {
    private $especialidade;
    private $salario;

    public function statusProfessor() {
        echo "<hr>Nome: ".$this->getNome()."<br>";
        echo "Idade: ".$this->getIdade()."<br>";
        echo "Sexo: ".$this->getSexo()."<br>";
        echo "Especialidade: ".$this->getEspecialidade()."<br>";
        echo "Salário: ".$this->getSalario()."<br>";
    }

    public function receberAumento($aumento) {
        $this->setSalario($this->getSalario()+$aumento);
    }

        // especialidade
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
        // salario
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }

}

?>