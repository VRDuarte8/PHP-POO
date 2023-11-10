<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p>Renovando bolsa de <strong>{$this->nome}</strong></p>";
    }
    
    public function pagarMensalidade() {
        //parent::pagarMensalidade();
        echo "<p><strong>{$this->getNome()}</strong> é bolsista! Pagamento facilitado</p>";
    }
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }


}
