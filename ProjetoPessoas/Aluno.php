<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $mat;
    private $curso;
    
    public function cancelarMatr(){
        echo "<p>Matrícula será cancelada</p>";
    }
    
    public function getMat() {
        return $this->mat;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMat($mat): void {
        $this->mat = $mat;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }
}
