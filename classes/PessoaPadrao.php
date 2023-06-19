<?php


    abstract class PessoaPadrao {
    // atributos
    private $nome;
    private $idade;
    private $sexo;

    // metodo construtor
    public function __construct($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    // metodo
    public function fazerAniversario() {
        $this->setIdade($this->getIdade()+1);
    }

    public function statusPessoa() {
        echo "<hr>Nome: ".$this->getNome()."<br>";
        echo "Idade: ".$this->getIdade()."<br>";
        echo "Sexo: ".$this->getSexo()."<br>";
    }

    //metodos especiais
    // nome
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    // idade
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    // sexo
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    

}

?>