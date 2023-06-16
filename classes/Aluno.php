<?php 

require_once "../classes/PessoaPadrao.php";

class Aluno extends PessoaPadrao {
    // atributos
    private $matricula;
    private $curso;

    // metodos
    public function statusAluno() {
        echo "<hr>Nome: ".$this->getNome()."<br>";
        echo "Idade: ".$this->getIdade()."<br>";
        echo "Sexo: ".$this->getSexo()."<br>";
        echo "Matricula: ".$this->getMatricula()."<br>";
        echo "Curso: ".$this->getCurso()."<br>";
    }

    public function cancelarMatricula() {
        if ($this->matricula) {
            $this->setMatricula(false);
        } else {
            echo "Você não possui uma matricula";
        }
    }

    // metodos especiais
    // matricula
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    // curso
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }

}

?>