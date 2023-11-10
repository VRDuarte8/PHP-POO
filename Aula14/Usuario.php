<?php
require_once 'Pessoa.php';
class Usuario extends Pessoa{
    private $login;
    private $totAssistido;
    
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
 
    public function viuMaisUm(){
        $this->totAssistido++;
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void {
        $this->totAssistido = $totAssistido;
    }


}
