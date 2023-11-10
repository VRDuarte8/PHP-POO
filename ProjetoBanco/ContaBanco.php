<?php
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    }
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
            echo "<p>A conta corrente foi aberta</p>";
        } elseif ($t == "CP") {
            $this->setSaldo(150);
            echo "<p>A conta poupança foi aberta</p>";
        }
    }
    
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>ERRO! Conta com dinheiro</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>ERRO! Conta em débito</p>";
        } else {
            $this->setStatus(false);
            echo "<p>A conta foi fechada</p>";
        }
    }
    
    public function depositar($valor){
        if($this->getSaldo()){
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de $valor realizado. Saldo atual: "
                . "R$ {$this->getSaldo()}</p>";
        } else {
            echo "<p>ERRO! A conta está fechada</p>";
        }
    }
    
    public function sacar($valor){
        if($this->getSaldo()){
            if($this->getSaldo() < $valor){
                echo "<p>ERRO! Você não tem saldo suficiente para o saque</p>";
            } else {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de $valor realizado. Saldo atual:"
                        . " R$ {$this->getSaldo()}</p>";
            } 
        } else {
            echo "<p>ERRO! A conta está fechada</p>";
        }
    }
    
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        } elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Pagamento de R$$v realizado</p>";
        } else{
            echo "<p>A conta está fechada</p>";
        }
    }
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }
}
