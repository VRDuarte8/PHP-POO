<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;
    
    public function praticar(){
        echo '<p>Praticando...</p>';
    }
    
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional): void {
        $this->registroProfissional = $registroProfissional;
    }


}
