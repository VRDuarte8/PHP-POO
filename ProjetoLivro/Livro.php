<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "<p>Livro{</p>
                <p>titulo= {$this->getTitulo()}</p>
                <p>autor= {$this->getAutor()}</p>
                <p>totPaginas= {$this->getTotPaginas()}, "
                . "pagAtual= {$this->getPagAtual()}</p>
                <p>aberto= {$this->getAberto()}</p>
                <p>leitor= {$this->leitor->getNome()}, "
                . "idade= {$this->leitor->getIdade()}, "
                . "sexo= {$this->leitor->getSexo()}}</p>";
    }
    
    public function abrir(){
        $this->setAberto(true);
        $this->setPagAtual(1);
    }
    
    public function fechar(){
        $this->setAberto(false);
        $this->setPagAtual(0);
    }
    
    public function folhear($pag){
        if ($this->getTotPaginas() >= $pag){
            if($this->getPagAtual() == 0){
                $this->setAberto(true);
            }
            $this->setPagAtual($pag);
        } else {
            $this->setPagAtual(0);
        }
    }
    
    public function avancarPag(){
        if($this->getPagAtual() == 0){
            $this->setAberto(true);
        }
        if($this->getPagAtual() == $this->getTotPaginas()){
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }
    
    public function voltarPag(){
        if($this->getPagAtual() == 1){
            $this->fechar();
        }
        if($this->getPagAtual() == 0){
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
}
