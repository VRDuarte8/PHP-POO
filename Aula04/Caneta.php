<?php
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    public function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampar();
    }

    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta): void {
        $this->ponta = $ponta;
    }
}
