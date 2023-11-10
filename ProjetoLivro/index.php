<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            $p = array();
            $l = array();
            
            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 25, "F");
            
            $l[0] = new Livro("Aprendendo Java", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO para Iniciantes", "Pedro Paulo", 500, $p[1]);
            $l[2] = new Livro("Java Avançado", "Maria Candido", 800, $p[0]);
            
            $l[0]->folhear(150);
            $l[0]->avancarPag();
            $l[0]->detalhes();
            $l[1]->abrir();
            $l[1]->detalhes();
        ?>
    </body>
</html>
