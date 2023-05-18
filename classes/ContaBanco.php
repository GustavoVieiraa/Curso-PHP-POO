<?php 

class ContaBanco {
    public $numConta;
    protected $tipoConta;
    private $saldo;
    private $cpf;
    private $nome;
    private $saldoEmprestimo;
    private $status;


    // contaInicial
    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
    }

    // informações gerais conta
    public function infoConta() {
        $dadosConta = [$this->getNome(), $this->getCpf(), $this->getNumConta(), $this->getTipoConta(), $this->getStatus(), $this->getSaldo()];
        return print_r($dadosConta);
    }

    // saqueConta
    public function saqueConta($valSaque) {
        if($this->getStatus() == true) {
            if ($this->getSaldo() < 0) {
                echo "<h1 style='color: red;'>Você não tem saldo para realizar um saque.</h1>";
            } else {
                if ($this->getSaldo() >= $valSaque) {
                    $this->setSaldo($this->getSaldo()-$valSaque);
                    echo "<h1 style='color: green;'>Saldo: $this->saldo</h1>";
                } else if ($this->getSaldo() < $valSaque) {
                    echo "<h1 style='color: red;'>Você não possui saldo para realizar esse saque.</h1>";
                }
            }
        }
    }

    // depositoConta
    public function depositoConta($valDeposito) {
        if($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo()+$valDeposito);
            echo "<h1 style='color: green;'>Seu novo saldo: $this->saldo</h1>";
        } else {
            echo "<h1 style='color: red;'>Você não possui uma conta.</h1>";
        }
    }

    // verificarSaldo
    public function verificarSaldo() {
        if($this->getStatus() == true) {
            echo "<h1 style='color: blue;'> Seu saldo atual é: $this->saldo </h1>";
        } else {
            echo "<h1 style='color: red;'>Você não possuí uma conta!</h1>";
        }
    }

     // abrirConta
     public function abrirConta($tipoConta) {
        if ($this->getStatus() == true) {
            echo "<h1 style='color: yellow;'>Você já possui uma conta!</h1>";
        } else {
            if ($tipoConta == "cc" or $tipoConta == "cp") {
                $this->setTipoConta($tipoConta);
                $this->setStatus(true);
                if ($this->getTipoConta() == "cc") {
                    $this->setSaldo(50);
                } else if ($this->getTipoConta() == "cp") {
                    $this->setSaldo(150);
                }
                echo "<h1 style='color: green;'> Sua conta foi criada com sucesso! </h1>";
            } else {
                echo "Tipo de conta invalido! Informe [cc] ou [cp]";
            }
        }
    }

    // desativarConta
    public function desativarConta() {
        if ($this->getSaldo() == 0) {
            echo "<h1 style='color: red;'>Sua conta foi desativada!</h1>";
            $this->setStatus(false);
        } else {
            if ($this->getSaldo() > 0) {
                echo "<h1 style='color: red;'>Não é possível desativar sua conta, retire o dinheiro!</h1>";
            } else if ($this->getSaldo() < 0) {
                echo "Você deve para o Banco, pague suas dividas para desativar a sua conta!";
            }
        }
    }

    // mensalidadeConta
    public function mensalidadeConta() {
        if ($this->getTipoConta() == 'cc') {
            if ($this->getSaldo() >= 12) {
                $this->setSaldo($this->getSaldo()-12);
            } else {
                echo "<h1 style='color: red;'>Você não possui dinheiro para mensalidade!</h1>";
            }
        
        } else if ($this->getTipoConta() == 'cp') {
            if ($this->getSaldo() >= 20) {
                $this->setSaldo($this->getSaldo()-20);
            } else {
                echo "<h1 style='color: red;'>Você não possui dinheiro para mensalidade!</h1>";
            }
        } else {
            echo "<h1 style='color: red;'>Você não possui uma conta!</h1>";
        }
    }

    /* Métodos Getters/Setters */

    // numConta
    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($nConta) {
        $this->numConta = $nConta;
    }

    // saldo
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }

    // cpf
    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    // nome
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    // saldoEmprestimo
    public function getSaldoEmprestimo() {
        return $this->saldoEmprestimo;
    }
    public function setSaldoEmprestimo($saldoEmp) {
        $this->saldoEmprestimo = $saldoEmp;
    }

    // tipoConta
    public function getTipoConta() {
        return $this->tipoConta;
    }
    public function setTipoConta($tipoConta) {
        $this->tipoConta = $tipoConta;
    }

    // status
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

}



?>